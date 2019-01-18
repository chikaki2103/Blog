<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';
    protected $filltable = [
	    'id', 
		'name', 
		'slug' 	
	];
	public function postT(){
		return $this->belongsToMany('App\Post','post_tags');
	}
	public function postOfTag(){
		return $this->belongsToMany('App\adminPost','post_tags','post_id','tag_id');
	}
}
