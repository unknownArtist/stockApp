<?php

class ImageTags extends \Eloquent {
	protected $table = 'image_tag';
	protected $fillable = array('image_id','tag_id');
    public $timestamps = false;
}