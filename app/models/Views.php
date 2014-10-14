<?php

class Views extends \Eloquent {
    protected $table = 'views';
    public  $timestamps = true;

    public static function getRecentViewedImages($user_id)
    {
    	return Views::where('views.user_id',$user_id)
                                    ->orderBy('views.created_at','DESC')
                                    ->limit(3)
                                    ->join('images','images.id','=','views.image_id')
                                    ->distinct()
                                    ->select('images.image_name','slug')
                                    ->get();
    }
}