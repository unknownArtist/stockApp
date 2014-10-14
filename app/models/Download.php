<?php

class Download extends \Eloquent {

    protected $table = 'downloads';
    public  $timestamps = true;

    public static function getRecentDownloadedImages($user_id)
    {
    	return Download::where('downloads.user_id',$user_id)
                                    ->orderBy('downloads.id','DESC')
                                    ->limit(3)
                                    ->join('images','images.id','=','downloads.image_id')
                                    ->distinct()
                                    ->select('images.image_name','slug')
                                    ->get();
    }
}