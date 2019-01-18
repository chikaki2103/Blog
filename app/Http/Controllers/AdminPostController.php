<?php

namespace App\Http\Controllers;
use App\Post;
use App\adminPost;
use App\Category;
use App\Tag;
use Carbon\Carbon;
use App\Post_Tag;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    
    public function PostsAdmin(){
    	\Carbon\Carbon::setlocale('vi');
    	 $posts = adminPost::orderBy('id','desc')->paginate(5);
    	
    	
        return view('manaPosts.post', compact('posts'));
    	
    }
    public function storePost(Request $request)
    {
        // dd($request->thumbnail);
       $validatedData = $request->validate([
        'title' => 'required',
        'description' => 'required',
        'content' => 'required',
        'thumbnail' => 'required',
        'tag_id' => 'required', 
         ],
          [
              'required' => ':attribute Không được để trống',
          ],
          [
              'tag_id' => 'Tag',              
          ]
       );

        if ($request->hasFile('thumbnail')) {
            $file = $request->thumbnail;
             $file->move('upload', $file->getClientOriginalName());
             $path = "upload/" .$file->getClientOriginalName();
           
        }
       

        $post = adminPost::storeData($request->all(),$path);
        $loopTag = $request['tag_id'];
       // dd($data);
      
       foreach ($loopTag as $key => $value) {
          $postTag = new Post_Tag;
          $postTag->tag_id = $value;
          // dd($postTag->tag_id);
          $postTag->post_id = $post->id;
          $postTag->save();            
       }
          // $path = $request->thumbnail->store('/public/images');
        // foreach ($request->thumbnail as $key => $value) {
        //   $value->store('/public/images');
        // }
        // $file_name = $request->thumbnail->getClientOriginalName();

        // dd($request->thumbnail->storeAs('public/images',$file_name));
        // $post = adminPost::storeData($request->all(),$path);
        return redirect(route('post.PostsAdmin'));
    }
    public function createPostAdmin(){
        $tags = Tag::all();
        return view('manaPosts.add', compact('tags'));

    }
    // public function destroy($id)
    // {
    //  adminPost::find($id)->delete();
    //  return redirect(asset('/admin/post'));
    // }
    public function detail($id){
        $detailPost = adminPost::find($id);

    return view('manaPosts.detail',['detailPost' => $detailPost]);
   }
    //  public function detail($id)
    // {
    //      $detailPost = adminPost::find($id);

    // return response()->json(['data'=>$detailPost,],200);
    // }

   public function destroy($id)
  {
    Post::find($id)->delete();
    return response()->json(['data'=>'removed'],200);
  }

  public function edit($id){
      $editPost = adminPost::find($id);
      // dd($editPost); 
      $tags = Tag::all();
      // foreach ($tags as $key => $tag) {
      //   if ($editPost['category_id']==$tag['id']) {
      //      $id = $tag['id'];       
      //   }
      // }
   

      // $post_tag = adminPost::with('tagofPost')->where()->find($id);

      // $post_tag->tagof_post
      //  foreach ($post_tag->tagofPost as $value) {
      // $tagP[$value->id] = Tag::with('postOfTag')->find($value->id);
      //   dd($tagP[$value->id]->toArray());

      //   }
      // $tagofPost = $post_tag->tagofPost;
      // dd($post_tag);
      // dd($tagofPost->toArray());

    return view('manaPosts.edit',['editPost' => $editPost,'tags' => $tags]);
  }
   public function update(Request $request, $id){
    $validatedData = $request->validate([
        'title' => 'required',
        'description' => 'required',
        'content' => 'required',      
        'tag_id' => 'required', 
         ]);
      $upPost = adminPost::find($id);

      $newTag = $request->tag_id;
      // dd($newTag);
      $upPost->title = $request->title;
      // dd($request->title);
      $upPost->description = $request->description;
      $upPost->content = $request->content;
       if ($request->hasFile('thumbnail')) {
            $file = $request->thumbnail;
             $file->move('upload', $file->getClientOriginalName());
             $path = "upload/" .$file->getClientOriginalName();
             $upPost->thumbnail = $path;
           
        }else{
          $upPost->thumbnail;
        }
        // dd($path);
      

      $upPost->slug = str_slug($request->title);
      $upPost->user_id = Auth::user()->id;
      
      $upPost->category_id = $request->category_id;
      // dd($upPost->category_id);
      $upPost->rate = 5;
      $upPost->save();

      $post_tag = adminPost::with('tagofPost')->find($id);
      $oldTag = array();
      foreach ($post_tag->tagofPost as $value) {
        $oldTag[] = $value->id; 
      }
      $delTags = array_diff($oldTag, $newTag);
      $addTags = array_diff($newTag, $oldTag);

      if (!empty($delTags)) {
        foreach ($delTags as $value) {
          $delDB = Post_Tag::where([
            ['post_id','=',$id],
            ['tag_id','=',$value],

          ])->delete();
        }
      }
      if (!empty($addTags)) {
        foreach ($addTags as $value) {
          $delDB = Post_Tag::updateData($id,$addTags);
        }
      }
        return redirect(route('post.PostsAdmin'));
      
  }
}
