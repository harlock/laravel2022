<?php

namespace App\Http\Controllers;
use App\Models\ReactionType;
use Illuminate\Http\Request;

class ReactionTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos=ReactionType::all();
        //dd($datos);
        return view("reactions.index",compact("datos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view("reactions.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "description"=>"required|max:25|min:5",
        ],[],["description"=>"reacción"]);

       ReactionType::create([
           "description"=>$request->description,
       ]);
        return redirect()->route("tipos_reacciones.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ReactionType  $reactionType
     * @return \Illuminate\Http\Response
     */
    public function show(ReactionType $reactionType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ReactionType  $reactionType
     * @return \Illuminate\Http\Response
     */
    public function edit(ReactionType $tipos_reaccione)
    {

        return view("reactions.edit",compact("tipos_reaccione"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ReactionType  $reactionType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReactionType $tipos_reaccione)
    {

        $tipos_reaccione->update(["description"=>$request->description]);
        return redirect()->route("tipos_reacciones.index");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ReactionType  $reactionType
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReactionType $tipos_reaccione)
    {
        $tipos_reaccione->delete();

        return redirect()->route("tipos_reacciones.index");
        //dd($tipos_reaccione);
        //php artisan route:list --path=ruta
    }
}
