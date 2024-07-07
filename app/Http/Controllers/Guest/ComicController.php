<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listaFumetti = Comic::all();

        $data = [
            "fumetti" => $listaFumetti
        ];

        return view("comics.index",$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //ritorno semplicemente la vista
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newComic = new Comic();
        $newComic->title = $data["title"];
        $newComic->author = $data["author"];
        $newComic->description = $data["description"];
        $newComic->publication_date = $data["publication_date"];
        $newComic->price = $data["price"];
        $newComic->publisher = $data["publisher"];

        $newComic->save();

        return redirect()->route('comics.show' , $newComic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic) {

        $data = [
            "comic" => $comic
        ];

        return view("comics.show", $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
