<?php

namespace App\Http\Controllers;

use App\Models\Obras;
use App\Http\Requests\StoreObrasRequest;
use App\Http\Requests\UpdateObrasRequest;

class ObrasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $obras = Obra::all();
        return view('obras.index', compact('obras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artistas = Artista::all();
        return view('obras.create', compact('artistas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreObrasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreObrasRequest $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|max:255',
            'id_artista' => 'required|exists:artistas,id',
            'precio' => 'required|numeric|min:0',
            'fecha_creacion' => 'required|date',
            'tipo' => 'required|max:255',
        ]);
    
        $obra = new Obra();
        $obra->nombre = $validatedData['nombre'];
        $obra->id_artista = $validatedData['id_artista'];
        $obra->precio = $validatedData['precio'];
        $obra->fecha_creacion = $validatedData['fecha_creacion'];
        $obra->tipo = $validatedData['tipo'];
        $obra->save();
    
        return redirect('/obras')->with('success', 'Obra guardada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Obras  $obras
     * @return \Illuminate\Http\Response
     */
    public function show(Obras $obras)
    {
        $artista = Artista::find($obra->id_artista);
        return view('obras.show', compact('obra', 'artista'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Obras  $obras
     * @return \Illuminate\Http\Response
     */
    public function edit(Obras $obras)
    {
        $artistas = Artista::all();
        return view('obras.edit', compact('obra', 'artistas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateObrasRequest  $request
     * @param  \App\Models\Obras  $obras
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateObrasRequest $request, Obras $obras)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|max:255',
            'id_artista' => 'required|exists:artistas,id',
            'precio' => 'required|numeric|min:0',
            'fecha_creacion' => 'required|date',
            'tipo' => 'required|max:255',
        ]);
    
        $obra->nombre = $validatedData['nombre'];
        $obra->id_artista = $validatedData['id_artista'];
        $obra->precio = $validatedData['precio'];
        $obra->fecha_creacion = $validatedData['fecha_creacion'];
        $obra->tipo = $validatedData['tipo'];
        $obra->save();
    
        return redirect('/obras')->with('success', 'Obra actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Obras  $obras
     * @return \Illuminate\Http\Response
     */
    public function destroy(Obras $obras)
    {
        //
    }
}
