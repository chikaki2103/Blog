<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	// public $timestamps = false;
    protected $table = 'posts';
    protected $filltable = [
	    'title', 
		'thumbnail', 
		'description', 
		'content',
		'slug',
		'user_id',
		'category_id',
		'view_count'
	];

	public function comments(){
		return $this->hasMany('App\Comment');
	}	
	public function users(){
        return $this->belongsToMany('App\User','comments','post_id','user_id');
    }
	public function category(){
		return $this->belongsTo('App\Category');
	}	
	public function tagg(){
		return $this->belongsToMany('App\Tag','post_tags');
	}
	public static function storeData($data){
	   	$post = new Post;
	   	$post->title = $data['title'];
	   	$post->description = $data['description'];
	   	$post->content = $data['content'];
	   	$post->category_id = $data['category_id'];


	   	$post->slug = random_int(1, 100);
	   	$post->user_id = 1;
	   	$post->category_id = 1;
	   	$post->rate =5;


	   	$post->save();
	   	return $post;
   }
   // public static function updateData($id,$data){
	  //  	$todo = Todo::find($id);
	  //  	$todo->todo = $data['todo'];
	  //  	$todo->save();

   
   // 	return $todo;
   // }
}
