<?php

namespace App\Http\Controllers;

use App\Models\Piece;
use Illuminate\Http\Request;

class PieceController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'title' => 'required|min:3'
        ]);

        $piece = new Piece;
        $piece->title = $request->title;
        $piece->autor = $request->autor;
        $piece->prize = $request->prize;
        $piece->type = $request->type;
        $piece->style = $request->style;
        $piece->save();

        return redirect()->route('Pieces')->with('success','Tarea creada');
    }

    public function index(){
        $Pieces = Piece::all();
        return view('content.menu', ['Pieces' => $Pieces]);
    }

    public function show($id){
        $Piece = Piece::find($id);
        return view('Piece.show', ['Piece' => $Piece]);
    }

    public function update(Request $request,$id){
        $Piece = Piece::find($id);
        $Piece->title = $request->title;
        $Piece->save();
        //return view('Piece.new', ['success' => 'tarea actualizada.']);
        return redirect()->route('Pieces')->with('success', 'tarea actualizada');
    }

    public function destroy(Request $request,$id){
        $Piece = Piece::find($id);
        $Piece->delete();
        return redirect()->route('Pieces')->with('success', 'tarea eliminada');
    }
}
