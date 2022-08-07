<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entrada;

use DB;
use Session;
use Illuminate\Support\Facades\Redirect;

class EntradaController extends Controller
{
    public function index(){

        $entradas = DB::table('entrada')
        ->where('idpagina','=',auth()->user()->current_page)
        ->get();

        return view('admin.entrada.index', compact('entradas'));
        
    }

    function create(){
        return view('admin.entrada.create');
    }

    function store(Request $request){
        $validate = $this->validate($request,[
            'titulo' => 'required|max:150',
            'contenido' => 'required',

        ]);

        $entrada = new Entrada;
        $entrada->titulo = $request->get('titulo');
        $entrada->contenido = $request->get('contenido');
        $entrada->idpagina = auth()->user()->current_page;
        $entrada->save();

        Session::flash('succes', 'Se registró la entrada con éxito.');
        return Redirect::to('admin/entradas');

    }
}
