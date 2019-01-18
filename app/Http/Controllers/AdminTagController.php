<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\Post;
use App\Post_Tag;


class AdminTagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        \Carbon\Carbon::setlocale('vi');
         $tags = Tag::orderBy('id','desc')->paginate(5);
        
        
        return view('manaTags.index', compact('tags'));
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
        $validatedData = $request->validate([
        'name' => 'required',
        
         ],
          [
              'required' => ':attribute Không được để trống',
          ]
          
       );

        $tag = new Tag;
        // $student->setConnection('students');
        $tag->name = $request->name;
        $tag->slug = str_slug($request->name);
        
        $tag->save();

    return response()->json(['name'=>$tag],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $tag = Tag::find($id);

    return response()->json(['data'=>$tag],200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tag = Tag::find($id);

    return response()->json(['data'=>$tag],200);
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

        $tag = Tag::find($id);
        $tag->name = $request->name;
        $tag->slug = str_slug($request->name);    
        $tag->save();
       return response()->json(['data'=>$tag],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   

        $del = Tag::find($id);
        $delpt = Post_Tag::where('tag_id','=',$del->id)->get()->each;
        $delpt->delete();
        $del->delete();
     return response()->json(['data'=>'removed'],200);
    }
}
