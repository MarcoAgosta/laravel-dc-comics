<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comics;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics=Comics::all();

        return view("comics.index", compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComicRequest $request)
    {
        $data=$request->validated();
        $comic = new Comics();
        $comic->title=$data["title"];
        $comic->description=$data['description'];
        $comic->thumb=$data['thumb'];
        $comic->price= (float) $data['price'];
        $comic->series=$data['series'];
        $comic->sale_date=$data['sale_date'];
        $comic->type=$data['type'];
        $comic->save();

        return redirect()->route("comics.show", $comic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic=Comics::find($id);

        return view("comics.show", compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic=Comics::find($id);

        if(!$comic){
            abort(406, "Ritenta con un ID corretto");
        };

        return view("comics.edit", compact("comic"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComicRequest $request, $id)
    {
        $data=$request->validated();

        $comic=Comics::findOrFail($id);
        $comic->title=$data["title"];
        $comic->description=$data['description'];
        $comic->thumb=$data['thumb'];
        $comic->price= (float) $data['price'];
        $comic->series=$data['series'];
        $comic->sale_date=$data['sale_date'];
        $comic->type=$data['type'];
        $comic->save();

        return redirect()->route("comics.show", $comic->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic=Comics::findOrFail($id);
        $comic->delete();
        return redirect()->route("comics.index");
    }
}
