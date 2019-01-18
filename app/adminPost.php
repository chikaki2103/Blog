<?php

namespace App;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
//** sd Auth::user add thêm cái này **
class adminPost extends Model
{
	 public $timestamps = true;
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

	public static function storeData($data,$path){
  	    $loop = $data['category_id'];
  	    $post = new Post;
        $post->title = $data['title'];
        $post->description = $data['description'];
        $post->content = $data['content'];
        foreach ($loop as $key => $value) {      
        $post->category_id = $value;
         } 
        $post->slug = str_slug($data['title']);
        $post->user_id = Auth::user()->id;
        // $post->category_id = 1;
        $post->rate =5;
        
       $post->thumbnail = $path;
        // $post->thumbnail = store('/public/images', $data['thumbnail']);
        // dd($post->thumbnail);
        $post->save();
         
	   	return $post;
   }
   public function tagOfPost(){
    return $this->belongsToMany('App\Tag','post_tags','post_id','tag_id');
  }
   // public static function updateData($id,$data,$upPost){
      
   //   // dd($data);
	   
   //    $upPost->title = $upPost['title'];
     

   //    $upPost->description = $upPost['description'];
   //    $upPost->content = $upPost['content'];
     
   //    $upPost->thumbnail = $data;
   //    // dd($upPost->thumbnail);
   //    $upPost->slug = str_slug($upPost['title']);
   //    $upPost->user_id = Auth::user()->id;
   //    $loop = $upPost['category_id'];
   //    dd($loop);

   //    foreach ($loop as $key => $value) {
   //      $upPost->category_id = $value;
   //    }
   //    $upPost->category_id = $upPost['category_id'];
   //    dd($upPost->category_id);

   //    $upPost->rate = 5;
   //    $upPost->save();

   
   // 	return $upPost;
   // }
}
