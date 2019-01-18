<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post_Tag extends Model
{
     protected $table = 'post_tags';
    protected $filltable = [
	    'id', 
		'post_id', 
		'tag_id'
	];
	// public static function storeData($data){
	//     $loopTag = $data['name'];
 //        dd($loopTag);

 //        $postTag = new Post_Tag;
 //        $postTag->post_id = $post->id; 
 //       foreach ($loopTag as $key => $value) {
 //           $postTag->tag_id = $value;
 //       }
 //   }
	public static function updateData($post_id,$data){
		foreach ($data as $value) {
			$postTag = new Post_Tag;
			$postTag->post_id = $post_id;
			$postTag->tag_id = $value;
			$postTag->save();
		}
	}
}
