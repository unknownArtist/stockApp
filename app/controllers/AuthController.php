<?php

class AuthController extends BaseController {

    public function getRegister()
    {
        return View::make('pages.auth.registration');
    }
	public function postRegister()
	{
		try
		{
		    // Let's register a user.
            $field = array(
                'email'    		        => Input::get('email'),
                'password' 		        => Input::get('pass'),
                'password_confirmation' => Input::get('password_confirmation'),
                'username'		        => Input::get('username'),
                'agreed_terms'       => Input::get('agreed_terms'),
            );
            $rules = array(
                'username'          => 'required|unique:users',
                'password'          => 'required|min:6|same:password_confirmation',
                'email'             => 'required|email|unique:users',
                'agreed_terms'   => 'required'
               );
            $v = Validator::make($field, $rules);
            if($v->fails())
            {
                Toastr::error($v->errors()->first(), $title = null);
                return Redirect::to('register-member')->withInput();
            }
            unset($field['password_confirmation']);
            unset($field['agreed_terms']);
		    $user = Sentry::register($field);

		    // Let's get the activation code
		    $activationCode = $user->getActivationCode();

		    //creating email activation URL
		    $URL = 'http://'.$_SERVER['HTTP_HOST']."/user/activation?code=".$activationCode."&username=".$user['username'];

		    //Sending email to subscribed user
		    $this->sendEmail($user['email'],array("template" => "register", "subject" => 'Account Confirmation','code' => $URL));
		    // Send activation code to the user so he can activate the account
            Toastr::success('An email has been sent to you kindly activate your account', $title = null);
            return Redirect::to('/register-member');

		}
		catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
		{
            Toastr::error("Email field is required");
            return Redirect::to('/register-member')->withInput();
		}
		catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
		{
            Toastr::error("Password field is required");
            return Redirect::to('/register-member')->withInput();
		}
		catch (Cartalyst\Sentry\Users\UserExistsException $e)
		{
            Toastr::info("User with this login already exists");
            return Redirect::to('/register-member')->withInput();
		}
	}

	public function getLogin()
	{
		return View::make('pages.auth.login');
	}
	public function postLogin()
	{
		try
		{
		    // Set login credentials
		    $credentials = array(
		        'username'    => Input::get('username'),
		        'password' => Input::get('pass'),
		    );

		    // Try to authenticate the user
		    $user = Sentry::authenticate($credentials, false);
		    if($user)
		    {
		    	if(Input::get('rememberme'))
		    	{
		    		Sentry::loginAndRemember($user);
                    Toastr::success("You are successfully logged in");
		    		return Redirect::to('/');
		    	}else
		    		{
                        Toastr::success("You are successfully logged in");
		    			return Redirect::to('/');
		    		}

		    }
		}

		catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
		{
            Toastr::error("Login field is required");
		    return Redirect::to('auth/login')->withInput();
		}
		catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
		{
            Toastr::error("Password field is required");
			return Redirect::to('auth/login');
		}
		catch (Cartalyst\Sentry\Users\WrongPasswordException $e)
		{
            Toastr::error("Wrong password, try again");
			return Redirect::to('auth/login')->withInput();

		}
		catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
		{
            Toastr::error("User was not found");
			return Redirect::to('auth/login')->withInput();
		}
		catch (Cartalyst\Sentry\Users\UserNotActivatedException $e)
		{
            Toastr::error("User is not activated");
			return Redirect::to('auth/login')->withInput();
		}

		// The following is only required if throttle is enabled
		catch (Cartalyst\Sentry\Throttling\UserSuspendedException $e)
		{
            Toastr::error("User is suspended");
			return Redirect::to('auth/login')->withInput();
		}
		catch (Cartalyst\Sentry\Throttling\UserBannedException $e)
		{
            Toastr::error("User is banned");
			return Redirect::to('auth/login')->withInput();
		}
	}

	public function getLogout()
	{
		Sentry::logout();
            Toastr::success("You are successfully logout");
		    return Redirect::to('/');

	}

	public function getForgotPassword()
	{
		return View::make('pages.auth.forgot_password');

	}
	public function postForgotPassword()
	{
		try
		{
		    // Find the user using the user email address
		    $user = Sentry::findUserByLogin(Input::get('email'));

		    // Get the password reset code
		    $resetCode = $user->getResetPasswordCode();
		    // Password reset URL
		    $URL = 'http://'.$_SERVER['HTTP_HOST']."/user/reset/password?code=".$resetCode."&email=".$user['email'];
		    $this->sendEmail($user['email'],array("template" => "password_reset","subject" => 'Password Reset','code' => $URL));
		    // Now you can send this code to your user via email for example.
		}
		catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
		{
		    echo 'User was not found.';
		}
	}
	public function getResetPassword() // Display Reset password form
	{
		return View::make('pages.auth.reset_password');
	}

	public function postResetPassword()
	{
		$fields = array(
			'password' => Input::get('password'),
			// 'confirm_password' => Input::get('confirm_password'),
			'code'	=> Input::get('code'),
			'email' => Input::get('email')
		);
		$rules = array(
			'password' => 'Required|max:6', //password must be required and atleast 6 char long
			'confirm_password' => 'Required',

		);
		try
		{
		    // Find the user using the user id
		    $user = Sentry::findUserByLogin(Input::get('email'));

		    // Check if the reset password code is valid
		    if ($user->checkResetPasswordCode(Input::get('code')))
		    {
		        if ($user->attemptResetPassword($fields['code'], $fields['password']))
		        {
		            return Redirect::to('/')->with('success','Your password updated successfully');
		        }
		        else
		        {
		        	return Redirect::to('/')->with('error','Your password couldn\'t updated');
		        }
		    }
		    else
		    {
		        // The provided password reset code is Invalid
		         return Redirect::to('/')->with('error','Your password reset code is invalid');
		    }

			}
			catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
			{
			    return Redirect::to('/')->with('error','User not found');
			}
	}
    public function getActivation()
    {
        try
        {
            // Find the user using the user id
            $user = Sentry::findUserByLogin(Input::get('username'));

            // Attempt to activate the user
            if ($user->attemptActivation(Input::get('code')))
            {
                Toastr::success("User Activated Successfully");
                return Redirect::to('/');
            }
            else
            {
                Toastr::error("User couldn't activated");
                return Redirect::to('/');
            }
        }
        catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
        {
            Toastr::error("User was not found");
            return Redirect::to('/');
        }
        catch (Cartalyst\Sentry\Users\UserAlreadyActivatedException $e)
        {
            Toastr::error("User is already activated");
            return Redirect::to('/');
        }
    }

}
