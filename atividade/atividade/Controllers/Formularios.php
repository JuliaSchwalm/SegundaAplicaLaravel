<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Formularios extends Controller
{
    public function pegaNome(Request $request){
        if ($request->input('select') == "tads"){
            return view('tads')
            ->with('nome', $request->input('nome') )
            ->with('idade', $request->input('idade') )
            ->with('curso', $request->input('select') );
        } else if  ($request->input('select') == "tinf"){
            return view('tinf')
            ->with('nome', $request->input('nome') )
            ->with('idade', $request->input('idade') )
            ->with('curso', $request->input('select') );
        } else{
            return view('tec')
            ->with('nome', $request->input('nome') )
            ->with('idade', $request->input('idade') )
            ->with('curso', $request->input('select') );
        }

   }

}

?>