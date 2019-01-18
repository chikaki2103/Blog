<?php

namespace App\Http\Controllers;
use App\Post;
use App\Category;
use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
     public function postTag($name){
      $tag = Tag::where('name',$name)->get();
     


        // $tags = Tag::all();
       
        
        $category  = Category::all();

        $tagname = \App\Tag::where('name', $name)->first();
        
        $id = $tagname->id;

        // $post_tag = \App\Tag::find($id)->postT;

        $post_tag = Tag::with('postT')->find($tagname->id);
        // dd($post_tag->toArray());
        // $tagpost = \App\Post_Tag::find($id)->get();
  		  // dd($tagpost->toArray());

  		// $tag = \App\Post::find($id)->tagg;
        // $tagname = \App\Tag::where('name', $name)->first();
        foreach ($post_tag->postT as $value) {
      $tagP[$value->id] = Post::with('tagg')->find($value->id);        
        }
  	// dd($tagP->toArray());
        return view('index', compact('post_tag','category','tagname','tag','tagP'));
    }
}
