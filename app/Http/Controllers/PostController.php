<?php

namespace App\Http\Controllers;
use App\Post;
use App\Category;
use App\Tag;
use Illuminate\Http\Request;
use Event;
class PostController extends Controller
{
     public function show($slug)
    {
       
        $post = Post::where('slug', $slug)->first();
        $id = $post->id;
		$category = \App\Post::find($id)->category;
        $tag = \App\Post::find($id)->tagg;
        Event::fire('viewcount', $post);
	       dd(Event::fire('viewcount', $post));
        return view('posts.detail', compact('post','category','tag'));
    }

    public function PostsAdmin(){
    	\Carbon\Carbon::setlocale('vi');
    	 $posts = Post::orderBy('id','desc')->paginate(5);
    	
    	
        return view('manaPosts.post', compact('posts'));
    	
    }
    public function storePost(Request $request)
    {
        $post = Post::storeData($request->all());
        return redirect(route('post.PostsAdmin'));
    }
    public function createPostAdmin(){

        return view('manaPosts.add');

    }
    
}
