<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Importo il model
use App\Models\Comic;

//Importo il mio formRequest Validation
use App\Http\Requests\CreateComicRequest;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('pages.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateComicRequest $request) //Passo allo store la richiesta di Validation del form corrente
    //N.B. al posto di CreateComicRequest per farlo tutto all'interno del Main Controller, ci va Request
    {
        // dd($request->all());
        // $data = $request->validated();
        $data = $request->all();
        $newComic = new Comic();

        //Validation all'interno del controller stesso, non utilizzando il formRequest
        // $data = $request->validate(
        //     [
        //         'title' => 'required|string|min:4|max:255',
        //         'description' => 'required|string',
        //         'price' => 'required|numeric',
        //     ],
        //     [
        //         'title.required' => 'Il campo Title è richiesto',
        //         'title.min' => 'Il campo devo contenere minimo 4 caratteri',
        //         'description' => 'Il campo Description è richiesto',
        //         'price' => 'Il campo Price è richiesto',
        //         'price.numeric' => 'Il campo deve essere un numero'
        //     ]
        // );

        $newComic->title = $data['title'];
        $newComic->description = $data['description'];
        $newComic->price = $data['price'];

        //Salvo i miei dati!!
        $newComic->save();

        //Faccio il redirect
        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::find($id);

        return view('pages.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::find($id);

        return view('pages.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateComicRequest $request, $id) //N.B. al posto di CreateComicRequest per farlo tutto all'interno del Main Controller, ci va Request
    {
        $comic = Comic::find($id);

        // $data = $request->validated();
        $data = $request->all();

        //Validation all'interno del controller stesso, non utilizzando il formRequest
        // $data = $request->validate(
        //     [
        //         'title' => 'required|string|min:4|max:255',
        //         'description' => 'required|string',
        //         'price' => 'required|numeric',
        //     ],
        //     [
        //         'title.required' => 'Il campo Title è richiesto',
        //         'title.min' => 'Il campo devo contenere minimo 4 caratteri',
        //         'description' => 'Il campo Description è richiesto',
        //         'price' => 'Il campo Price è richiesto',
        //         'price.numeric' => 'Il campo deve essere un numero'
        //     ]
        // );

        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->price = $data['price'];

        //Salvo i miei dati!!
        $comic->save();

        //Faccio il redirect
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::find($id);
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
