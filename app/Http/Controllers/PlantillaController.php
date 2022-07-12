<?php

namespace App\Http\Controllers;
use App\Plantilla;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;

class PlantillaController extends Controller
{
    function index(){

        $data_plantillas = DB::table('plantilla')
        ->paginate('10');
        return view('panel.plantillas.index', compact('data_plantillas'));
    }

    function create(){
        return view('panel.plantillas.create');
    }

    function store(Request $request){

        $validate = $this->validate($request,[
            'titulo' => 'required|max:150',
            'descripcion' => 'required',
            'portada'=>'required|mimes:jpeg,bmp,jpg,png|max:5000',

        ]);

        $plantilla = new Plantilla;
        $plantilla->titulo = $request->get('titulo');
        $plantilla->descripcion = $request->get('descripcion');
        if(Input::hasFile('portada')){
            $file=Input::file('portada');
            $file->move(public_path().'/portadas',time().".".$file->getClientOriginalExtension());
            $plantilla->portada=time().".".$file->getClientOriginalExtension();
        }

        $plantilla->save();

        Session::flash('succes', 'Se registró la plantilla con exito');
        return Redirect::to('admin/plantillas');
    }
}
