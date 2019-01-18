<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $filltable = [
	    'content', 
		'post_id', 
		'user_id'		
	];

	public function post(){
		return $this->belongsTo('App\Post');
	}
}
