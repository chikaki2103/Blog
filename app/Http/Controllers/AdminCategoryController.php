<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\Post_Tag;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        \Carbon\Carbon::setlocale('vi');
         $categories = Category::orderBy('id','desc')->paginate(5);
        
        
        return view('manaCategory.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $category = new Category;
        // $student->setConnection('students');
        $category->name = $request->name;
        $category->slug = str_slug($request->name);
        
        $category->save();

    return response()->json(['name'=>$category],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);

    return response()->json(['data'=>$category],200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);

    return response()->json(['data'=>$category],200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->name;
        $category->slug = str_slug($request->name);    
        $category->save();
       return response()->json(['data'=>$category],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delCate = Category::with('CatePost')->find($id);
        $getid = $delCate->CatePost;
        foreach ($getid as $key => $value) {
            $idpost = $value['id'];
        }
        $delPost = Post::where('category_id','=',$id)->get()->each;
        $delPostTag = Post_Tag::where('post_id','=',$idpost)->get()->each;
        $delPostTag->delete();
        $delCate->delete();
        $delPost->delete();

        return response()->json(['data'=>'removed'],200);
    }
}
