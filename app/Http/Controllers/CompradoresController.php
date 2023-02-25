<?php

namespace App\Http\Controllers;

use App\Models\Compradores;
use App\Http\Requests\StoreCompradoresRequest;
use App\Http\Requests\UpdateCompradoresRequest;

class CompradoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buyers = Buyer::all();
        return view('buyers.index', compact('buyers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buyers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCompradoresRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompradoresRequest $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'required|unique:buyers,email',
            'direccion' => 'required',
            'tarjeta_credito' => 'required',
            'codigo_seguridad' => 'required',
            'pregunta_seguridad1' => 'required',
            'respuesta_seguridad1' => 'required',
            'pregunta_seguridad2' => 'required',
            'respuesta_seguridad2' => 'required',
            'pregunta_seguridad3' => 'required',
            'respuesta_seguridad3' => 'required',
        ]);

        $buyer = new Buyer();
        $buyer->nombre = $request->nombre;
        $buyer->apellido = $request->apellido;
        $buyer->email = $request->email;
        $buyer->direccion = $request->direccion;
        $buyer->tarjeta_credito = $request->tarjeta_credito;
        $buyer->codigo_seguridad = $request->codigo_seguridad;
        $buyer->pregunta_seguridad1 = $request->pregunta_seguridad1;
        $buyer->respuesta_seguridad1 = $request->respuesta_seguridad1;
        $buyer->pregunta_seguridad2 = $request->pregunta_seguridad2;
        $buyer->respuesta_seguridad2 = $request->respuesta_seguridad2;
        $buyer->pregunta_seguridad3 = $request->pregunta_seguridad3;
        $buyer->respuesta_seguridad3 = $request->respuesta_seguridad3;
        $buyer->save();

        return redirect()->route('buyers.index')->with('success', 'Comprador creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Compradores  $compradores
     * @return \Illuminate\Http\Response
     */
    public function show(Compradores $compradores)
    {
        return view('buyers.show', compact('buyer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Compradores  $compradores
     * @return \Illuminate\Http\Response
     */
    public function edit(Compradores $compradores)
    {
        return view('buyers.edit', compact('buyer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCompradoresRequest  $request
     * @param  \App\Models\Compradores  $compradores
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompradoresRequest $request, Compradores $compradores)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'required|email|unique:buyers,email,' . $buyer->id,
            'direccion' => 'required',
            'tarjeta_credito' => 'required',
            'codigo_seguridad' => 'required',
            'pregunta_seguridad1' => 'required',
            'respuesta_seguridad1' => 'required',
            'pregunta_seguridad2' => 'required',
            'respuesta_seguridad2' => 'required',
            'pregunta_seguridad3' => 'required',
            'respuesta_seguridad3' => 'required',
        ]);
    
        $buyer->update($request->all());
    
        return redirect()->route('buyers.index')
            ->with('success', 'Comprador actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Compradores  $compradores
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compradores $compradores)
    {
        //
    }
}
