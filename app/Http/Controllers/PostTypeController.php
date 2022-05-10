<?php

namespace App\Http\Controllers;

use App\Models\PostType;
use Illuminate\Http\Request;

class PostTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos=PostType::all();
        return view("post.index",compact("datos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("post.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        PostType:: create([
            "description" =>$request->description,
        ]);
        return redirect()->route("tipos_post.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PostType  $postType
     * @return \Illuminate\Http\Response
     */
    public function show(PostType $postType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PostType  $postType
     * @return \Illuminate\Http\Response
     */
    public function edit(PostType $tipos_post)
    {
        //
        return view('post.update',compact("tipos_post"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PostType  $postType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PostType $tipos_post)
    {
        //dd($tipos_post);
        $tipos_post->update(["description"=>$request->description]);
        return redirect()->route("tipos_post.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PostType  $postType
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostType $tipos_post)
    {
        //
        $tipos_post->delete();
        return redirect()->route("tipos_post.index");
    }
}
