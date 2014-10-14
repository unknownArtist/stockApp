<?php

class Helpers {

    public static function getFullUserName($user_id =null)
    {
        if(empty($user_id))
        {
            $user_id = Sentry::getUser()->id;
        }
        $user = UserMeta::where('user_id',$user_id)->get();

       	if(count($user) > 0)
       	{
       		return $user[0]->first_name." ".$user[0]->last_name;
       	}else
            {
       			  $user = User::find($user_id);
              return $user->username;
       		  }
    }
}