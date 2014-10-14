<?php

class HomeController extends BaseController {

	public function getIndex()
	{
        return View::make('pages.home');
	}
	public function getHome()
	{
		return View::make('pages.home');
	}
    public function getContact()
    {
        return View::make('pages.contact');
    }
    public function getAbout()
    {
        return View::make('pages.about');
    }
    public function getHowItWorks()
    {
        return View::make('pages.how-it-works');
    }
    public function getFaq()
    {
        return View::make('pages.faq');
    }
    public function getContributing()
    {
        return View::make('pages.contributing');
    }
    public function getBecomeAMember()
    {
        return View::make('pages.registration-member');
    }
    public function getContributorAccount()
    { 
        $user_id            = Request::segment(3);
        $user_details       = UserMeta::where('user_id',$user_id)->get();
        $download_count     = Download::where('user_id',$user_id)->count();

        $recent_downloads   = Download::getRecentDownloadedImages($user_id);
        $recent_views       = Views::getRecentViewedImages($user_id);
        
        return View::make('pages.contributor-account')
                   ->with('recentViewedImages',$recent_views)
                   ->with('recentDownloadedImages',$recent_downloads)
                   ->with('download_count',$download_count)
                   ->with('details',$user_details[0]);
    }
    public function getChangeLang()
    {
        Session::put('lang',Request::segment(3));
        return Redirect::back();
    }


}
