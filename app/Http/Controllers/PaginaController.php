<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Pagina;
use Session;
use Illuminate\Support\Facades\Redirect;

class PaginaController extends Controller
{
    function index(){
        $data_paginas = DB::table('pagina')
        ->where('iduser', '=',auth()->user()->id)
        ->orderby('id','desc')
        ->get();
        return view('admin.pagina.index', compact('data_paginas'));
    }

    function create(){

        $plantillas = DB::table('plantilla')
        ->orderby('id','asc')
        ->take(3)->get();
        return view('admin.pagina.create', compact('plantillas'));
    }

    function store(Request $request){
        $validate = $this->validate($request,[
            'dominio' => 'required|unique:pagina|regex:/^[0-9a-zA-Z\s]+$/u',
            'idplantilla' => 'required'

        ]);

        $pagina = new Pagina;
        $pagina->dominio=$request->get('dominio');
        $pagina->idplantilla=$request->get('idplantilla');
        $pagina->iduser=auth()->user()->id;
        $pagina->estado = 'activo';
        $pagina->save();

        Session::flash('succes', 'Se registró la página con exito.');
        return Redirect::to('admin/paginas');
    }

    function update(Request $request,$id){
        $validate = $this->validate($request,[
            'dominio' => 'required|unique:pagina|regex:/^[0-9a-zA-Z\s]+$/u',

        ]);

        $pagina = Pagina::findOrFail($id);
        $pagina->dominio=$request->get('dominio');
        $pagina->update();

        Session::flash('succes', 'Se cambió el dominio con exito.');
        return Redirect::to('admin/paginas');
    }

    function destroy($id){
        $pagina = Pagina::findOrFail($id);
        $pagina->delete();

        Session::flash('succes', 'Se eliminó la página con exito.');
        return Redirect::to('admin/paginas');
    }

    function change_theme(){

        $pagina = DB::table('pagina')
        ->where('id','=',auth()->user()->current_page)
        ->first();

        $plantillas = DB::table('plantilla')
        ->get();

        return view('admin.pagina.change_theme',compact('plantillas', 'pagina'));
    }

    function update_theme(Request $request){

        $pagina = Pagina::findOrfail(auth()->user()->current_page);
        $pagina->idplantilla = $request->get('idplantilla');
        $pagina->update();

        Session::flash('succes', 'Se cambió la plantilla con éxito.');
        return Redirect::to('admin/change/plantillas');

    }

}
