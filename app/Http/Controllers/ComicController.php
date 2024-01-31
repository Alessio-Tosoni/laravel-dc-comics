<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Comic::all();

        return view("comics.index", compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data =$request->all();

        $newComic = new Comic();
        $newComic->title = $data['title'];
        $newComic->cover = $data['cover'];
        $newComic->price = $data['price'];
        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dettaglio = Comic::find($id);

       return view("comics.show", compact("dettaglio"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view("comics.edit", compact("comic"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        
        $data= $request->all();

        $comic->title = $data['title'];
        $comic->cover = $data['cover'];
        $comic->price = $data['price'];
        $comic->update();

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
   
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }

    
}
