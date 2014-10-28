<?php

class Views extends \Eloquent {
    protected $table = 'views';
    public  $timestamps = true;

    public static function getRecentViewedImages($user_id)
    {


//        return  DB::select( DB::raw("SELECT *
//                              FROM (SELECT * FROM views
//                              WHERE id IN (SELECT MAX(id) FROM views GROUP BY image_id)
//                              ORDER BY id DESC LIMIT 3) v JOIN images i
//                              ON v.image_id = i.id ORDER BY v.id DESC")
//        );

        return  Views::where('views.user_id',$user_id)
                     ->join('images','images.id','=','views.image_id')
                     ->select(DB::raw("MAX(views.id) as viewID"),'images.image_name','slug')
                     ->groupBy('views.image_id')
                     ->orderBy('viewID','DESC')
                     ->get();

    }



}