<?php

class ContributorController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public  function getContributorRegistration()
    { 
        return View::make('pages.registration');
    }
	public function postContributorRegistration()
    {
        $fields = array(
            'user_id'               => Sentry::getUser()->id,
            'first_name'            => Input::get('first_name'),
            'last_name'             => Input::get('last_name'),
            'address'               => Input::get('address'),
            'state'                 => Input::get('state'),
            'city'                  => Input::get('city'),
            'zip'                   => Input::get('zip'),
            'phone'                 => Input::get('phone'),
            'website'               => Input::get('website'),
            'facebook'              => Input::get('facebook'),
            'twitter'               => Input::get('twitter'),
            'google_plus'           => Input::get('google'),
            'linked_in'             => Input::get('linkedin'),
            'info'                  => Input::get('info'),
            'gravitar'              => Input::get('gravitar'),
            'terms_and_conditions'  => Input::get('terms_and_conditions')
        );

        $rules = array(
            'first_name'            =>      'required',
            'last_name'             =>      'required',
            'address'               =>      'required',
            'state'                 =>      'required',
            'city'                  =>      'required',
            'zip'                   =>      'required|integer',
            'phone'                 =>      'required|integer',
            'terms_and_conditions'  =>      'required'
        );

        $v = Validator::make($fields,$rules);
        if($v->fails())
        {
            Toastr::error($v->errors()->first());
            return Redirect::to('/contributor/registration')->withInput();
        }else
        {
            // Remove the value of termis and condition from array ( which will be saved) which is just a placeholder
            unset($fields["terms_and_conditions"]);
            $user_meta = UserMeta::create($fields);

            if($user_meta)
            {
                $user = User::find(Sentry::getUser()->id);
                $user->contributor = 1;
                $user->save();

                Toastr::success("You are contributor now");
                Toastr::success("Congratulations");
                
                return Redirect::to('/');
            }else
            {
                Toastr::error("Registration was unsuccessful");
                return Redirect::to('/contributor/registration');
            }
        }
    }


}
