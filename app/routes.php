<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
/*--------------------------Search Routes-------------------------------------*/
    Route::get('search', array('as'=>'search','uses'=>'SearchController@getIndex'));
    Route::get('search/image',array('as'=>'search-image','uses'=>'SearchController@getInstantSearch'));

/*--------------------------End of Search Routes------------------------------*/

/*-------------------------Contributor Account Routes-------------------------*/
Route::group(array('before' => 'auth'), function() {
    Route::get('image/{id}/download/{image_name}',array('uses'=>'ImageController@downloadImage'));
    Route::get('image/{id}/{slug}',array('uses'=>'ImageController@getImageView'));
    Route::get('contributor/registration', array('as'=>'contributor-registration','uses'=>'ContributorController@getContributorRegistration'));
    Route::post('contributor/registration', array('uses'=>'ContributorController@postContributorRegistration'));

});
/*----------------------------------------------------------------------------*/
	// Route::get('home', array('as'=>'home','uses'=>'HomeController@getHome'));
    Route::get('about', array('as'=>'about','uses'=>'HomeController@getAbout'));
    Route::get('contact', array('as'=>'contact','uses'=>'HomeController@getContact'));
    Route::get('how-it-works', array('as'=>'how-it-works','uses'=>'HomeController@getHowItWorks'));
    Route::get('faq', array('as'=>'faq','uses'=>'HomeController@getFaq'));
    Route::get('contributing', array('as'=>'contributing','uses'=>'HomeController@getContributing'));
    Route::get('register-member', array('as'=>'become-a-member','uses'=>'HomeController@getBecomeAMember'));



/*--------------------------  Images Routes -----------------------------*/
Route::group(array('before' => 'auth|contributor'), function() {
    Route::get('image/suggested/tags',array('as'=>'search-tag', 'uses'=>'ImageController@getTagSuggestions'));
    Route::post('user/image/upload', array('uses' => 'ImageController@postImageUpload'));
	Route::get('user/image/upload', array('as' => 'upload_image', 'uses' => 'ImageController@getImageUpload'));
    Route::get('contributor/account/{user_id}/details', array('as'=>'contributor-account','uses'=>'HomeController@getContributorAccount'));
});
/*-------------------------- End of Upload Image uploads ----------------------*/

	Route::get('/', array('as' => 'home', 'uses' => 'HomeController@getIndex'));

/*------------------------------Authentication Routes---------------------------*/

    Route::get('auth/register', array('as' => 'register', 'uses' => 'AuthController@getRegister'));
	Route::get('auth/login', array('as' => 'login', 'uses' => 'AuthController@getLogin'));
	Route::post('auth/register', array('as' => 'home', 'uses' => 'AuthController@postRegister'));
	Route::get('user/activation', array('as' => 'activation', 'uses' => 'AuthController@getActivation'));
	Route::post('auth/login', array('as' => 'login', 'uses' => 'AuthController@postLogin'));
	Route::get('user/forgot/password', array('as' => 'forgot_password', 'uses' => 'AuthController@getForgotPassword'));
	Route::post('user/forgot/password', array('as' => 'forgot_password', 'uses' => 'AuthController@postForgotPassword'));
	Route::get('user/reset/password', array('as' => 'forgot_password', 'uses' => 'AuthController@getResetPassword'));
	Route::post('user/reset/password', array('as' => 'forgot_password', 'uses' => 'AuthController@postResetPassword'));
	Route::get('auth/logout', array('as' => 'logout', 'uses' => 'AuthController@getLogout'));

/*--------------------------End of Auth Routes----------------------------*/

    Route::get('user/lang/{lang}', array('as' => 'change_lang', 'uses' => 'HomeController@getChangeLang'));
