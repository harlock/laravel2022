<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostType;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /**
         select posts.name,posts.content, users.name, post_types.description
        from posts, users, post_types
        where users.id=posts.user_id and post_types.id=posts.post_type_id;
         **/
        $datos=Post::join("users","users.id","=","posts.user_id")
        ->join("post_types","post_types.id","=","posts.post_type_id")
        ->select("posts.name","posts.content","users.name as user",
            "post_types.description","posts.id")
        ->get();
        //dd($datos);
        return view("publicaciones.index",compact("datos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type_posts=PostType::all();

        return view("publicaciones.create",compact("type_posts"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Post:: create([
            "name" =>$request->name,
            "content"=>$request->get("content"),
            "user_id"=>$request->user()->id,
            "post_type_id"=>$request->post_type_id,
        ]);
        return redirect()->route("posts.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //dd($post);
        $type_posts=PostType::all();

        return view('publicaciones.update',compact("post","type_posts"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //dd($post);
        $post->update(["name"=>$request->name,
            "content"=>$request->get("content"),
            "post_type_id"=>$request->post_type_id]);
        return redirect()->route("posts.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route("posts.index");
    }
}
