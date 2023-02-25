<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artistas = Artista::all();
        return view('artistas.index', compact('artistas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artistas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validación de datos de entrada
        $validatedData = $request->validate([
            'nombre' => 'required|max:255',
            'fecha_nacimiento' => 'required|date',
            'nacionalidad' => 'required|max:255',
            'biografia' => 'required',
            'fotografia' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        // Procesamiento de datos de entrada y almacenamiento en la base de datos
        $artista = new Artista();
        $artista->nombre = $request->input('nombre');
        $artista->fecha_nacimiento = $request->input('fecha_nacimiento');
        $artista->nacionalidad = $request->input('nacionalidad');
        $artista->biografia = $request->input('biografia');
        
        // Subir la imagen
        if ($request->hasFile('fotografia')) {
            $image = $request->file('fotografia');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/imagenes');
            $image->move($destinationPath, $filename);
            $artista->fotografia = $filename;
        }
        
        $artista->save();
    
        // Redirigir al usuario a la vista de lista de artistas
        return redirect()->route('artistas.index')
                         ->with('success','Artista creado satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function show(Artist $artist)
    {
        return view('artists.show', compact('artist'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    
    public function edit(Artist $artist)
    {
    return view('artists.edit', compact('artist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artist $artist)
    {
        $request->validate([
            'nombre' => 'required',
            'fecha_nacimiento' => 'required|date',
            'nacionalidad' => 'required',
            'biografia' => 'required',
            'fotografia' => 'nullable|image|max:2048',
        ]);
    
        // actualizamos los campos del artista con los datos del formulario
        $artist->nombre = $request->nombre;
        $artist->fecha_nacimiento = $request->fecha_nacimiento;
        $artist->nacionalidad = $request->nacionalidad;
        $artist->biografia = $request->biografia;
    
        // si se ha proporcionado una nueva imagen de perfil, la guardamos
        if ($request->hasFile('fotografia')) {
            $image = $request->file('fotografia');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/artistas'), $filename);
            $artist->fotografia = $filename;
        }
    
        // guardamos los cambios en la base de datos
        $artist->save();
    
        // redireccionamos a la vista de detalles del artista actualizado
        return redirect()->route('artistas.show', $artist);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artist $artist)
    {
        $artist->delete();
    
        return redirect()->route('artists.index')
                         ->with('success', 'Artista eliminado exitosamente.');
    }
}
