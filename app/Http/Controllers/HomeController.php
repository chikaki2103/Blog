<?php

namespace App\Http\Controllers;
use App\Post;
use App\Category;
use App\Tag;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        return view('home');
    }
    public function page(){
        // phân trang với một page có 10 bài post
        $posts  = Post::all();
        $posts  = Post::paginate(5);   
        $category = \App\Category::all();
        $tags = Tag::all();
        
        // dd($tags->toArray());
        return view('index',[
            'posts' => $posts,
            'category' => $category,
            'tags' => $tags 
        ]);
    }
    
    public function show($slug)
    {
        
        $post = Post::findOrFail($slug);    
        $category = \App\Post::find($slug)->category;
        return view('posts.detail', compact('post','category'));
    }

     public function category($name)
    {   
        // $posts  = Post::all();
        // $posts  = Post::paginate(5);
        $category = Category::where('name', $name)->first();
        $id = $category->id;
        $CatePost = \App\Category::find($id)->CatePost;
        $CatePost  = Post::where('category_id', $id)->paginate(5);
        // dd($CatePost->toArray());
        
        // $category = $post->category_id;
   
        return view('index', compact('CatePost','category')); 
    }


    public function searchByTitle(Request $request)
    {
        $posts = Post::where('title', 'like', '%' . $request->value . '%')->get();

        return response()->json($posts); 
    }
    // public function postTag($name){
       
        
    //     // $category = Category::where('name', $name)->first();

    //     // $id = $category->id;
    //     // $CatePost = \App\Category::find($id)->CatePost;
    //     //  dd($category->toArray());
    //     // $tagname = \App\Tag::where('name', $name)->first();
        
    //     // $id = $tagname->id;

    //     $post_tag = \App\Tag::find($name)->postT;
        
      
    //     return view('index', compact('post_tag','category','tagname'));
    // }
    public function profile(){
        \Carbon\Carbon::setlocale('vi');
        $userId = Auth::user()->id;
        $userPost = Post::where('user_id','=',$userId)->orderBy('id','desc')->get()->take(3);
        $countPost = Post::where('user_id','=',$userId)->count();
        // dd($countPost);
        return view('profile.profile',compact('userPost','countPost'));
    }
}
