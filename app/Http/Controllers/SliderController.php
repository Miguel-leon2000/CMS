<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
use App\Slider;
use Illuminate\Support\Facades\Input;

class SliderController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){

        $slider = DB::table('slider')
        ->where('idpagina','=',auth()->user()->current_page)
        ->get();

        return view('admin.slider.index', compact('slider'));
        
    }

    function create(){
        return view('admin.slider.create');
    }

    function store(Request $request){
        $validate = $this->validate($request,[
            'titulo' => 'required|max:250',
            'imagen'=>'required|mimes:jpeg,bmp,jpg,png|max:5000',

        ]);

        $slider = new Slider;
        $slider->titulo = $request->get('titulo');
        if(Input::hasFile('imagen')){
            $file=Input::file('imagen');
            $file->move(public_path().'/sliders',time().".".$file->getClientOriginalExtension());
            $slider->imagen=time().".".$file->getClientOriginalExtension();
        }
        $slider->idpagina = auth()->user()->current_page;
        $slider->save();

        Session::flash('succes', 'Se registró el slider con éxito.');
        return Redirect::to('admin/slider');

    }

    public function edit($id){

        $slider = Slider::findOrFail($id);

        return view('admin.slider.edit',compact('slider'));
    }

    public function update(Request $request, $id){
        $validate = $this->validate($request,[
            'titulo' => 'required|max:250',
            'imagen'=>'mimes:jpeg,bmp,jpg,png|max:5000',

        ]);

        $slider = Slider::findOrFail($id);
        $slider->titulo = $request->get('titulo');
        if(Input::hasFile('imagen')){
            $file=Input::file('imagen');
            $file->move(public_path().'/sliders',time().".".$file->getClientOriginalExtension());
            $slider->imagen=time().".".$file->getClientOriginalExtension();
        }
        $slider->idpagina = auth()->user()->current_page;
        $slider->update();

        Session::flash('succes', 'Se actualizó el slider con éxito.');
        return Redirect::to('admin/slider');
    }

    function destroy($id){
        $slider = Slider::findOrFail($id);
        $slider->delete();

        Session::flash('succes', 'Se eliminó el slider con éxito.');
        return Redirect::to('admin/slider');
    }
}
