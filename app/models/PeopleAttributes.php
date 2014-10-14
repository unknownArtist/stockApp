<?php

class PeopleAttributes extends \Eloquent {

	protected $table = 'people_attributes';
    public $timestamps = false;

    public function image()
    {
        return $this->belongsTo('ImageModel');
    }
}