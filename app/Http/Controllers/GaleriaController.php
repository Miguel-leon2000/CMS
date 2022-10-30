<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
use App\Galeria;
use Illuminate\Support\Facades\Input;

class GaleriaController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){

        $galeria = DB::table('galeria')
        ->where('idpagina','=',auth()->user()->current_page)
        ->get();

        return view('admin.galeria.index', compact('galeria'));
        
    }

    function create(){
        return view('admin.galeria.create');
    }

    function store(Request $request){
        $validate = $this->validate($request,[
            'imagen'=>'mimes:jpeg,bmp,jpg,png|max:5000',

        ]);

        $galeria = new Galeria;
        $galeria->imagen = $request->get('imagen');
        if(Input::hasFile('imagen')){
            $file=Input::file('imagen');
            $file->move(public_path().'/galeria',time().".".$file->getClientOriginalExtension());
            $galeria->imagen=time().".".$file->getClientOriginalExtension();
        }
        $galeria->idpagina = auth()->user()->current_page;
        $galeria->save();

        Session::flash('succes', 'Se agregó la imagen con éxito.');
        return Redirect::to('admin/galeria');

    }

    function destroy($id){
        $galeria = Galeria::findOrFail($id);
        $galeria->delete();

        Session::flash('succes', 'Se eliminó la imagen con éxito.');
        return Redirect::to('admin/galeria');
    }
}
