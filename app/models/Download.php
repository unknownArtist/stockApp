<?php

class Download extends \Eloquent {

    protected $table = 'downloads';
    public  $timestamps = true;

    public static function getRecentDownloadedImages($user_id)
    {
        return Download::where('downloads.user_id',$user_id)
            ->join('images','images.id','=','downloads.image_id')
            ->select(DB::raw("MAX(downloads.id) as downloadID"),'images.image_name','slug')
            ->groupBy('downloads.image_id')
            ->orderBy('downloadID','DESC')
            ->get();

    }
}