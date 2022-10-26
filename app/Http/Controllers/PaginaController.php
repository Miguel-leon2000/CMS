<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Pagina;
use App\SeccionUno;
use App\SeccionDos;
use App\ConfigMenu;
use App\ConfigGeneral;
use App\ConfigFooter;
use App\ConfigItem;
use App\Slider;
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

        $seccion_uno = new SeccionUno;
        $seccion_uno->titulo = 'Titulo de mi sección';
        $seccion_uno->descripcion = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit dolorem facere, maiores ullam earum quibusdam in quidem optio accusamus tempora autem pariatur. Repellendus accusamus eligendi magni a quis modi alias quo quas culpa necessitatibus, quidem voluptate? Sapiente ipsum architecto alias sint maxime vel tenetur tempore quae iure corporis, velit voluptas sit nihil, accusantium minima expedita mollitia reprehenderit eveniet, debitis quas explicabo quaerat possimus incidunt nulla. Quo nihil odit, eius minima deserunt nesciunt necessitatibus architecto unde dignissimos praesentium qui earum voluptatibus animi aspernatur ullam! Nobis iure odio ea expedita tempore suscipit quisquam qui, eaque veniam ipsum laborum rem rerum ut pariatur.';
        $seccion_uno->imagen = 'default_seccion_uno.jpg';
        $seccion_uno->idpagina = $pagina->id;
        $seccion_uno->save();

        $seccion_dos = new SeccionDos;
        $seccion_dos->titulo = 'Titulo de mi sección';
        $seccion_dos->descripcion = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit dolorem facere, maiores ullam earum quibusdam in quidem optio accusamus tempora autem pariatur. Repellendus accusamus eligendi magni a quis modi alias quo quas culpa necessitatibus, quidem voluptate? Sapiente ipsum architecto alias sint maxime vel tenetur tempore quae iure corporis, velit voluptas sit nihil, accusantium minima expedita mollitia reprehenderit eveniet, debitis quas explicabo quaerat possimus incidunt nulla. Quo nihil odit, eius minima deserunt nesciunt necessitatibus architecto unde dignissimos praesentium qui earum voluptatibus animi aspernatur ullam! Nobis iure odio ea expedita tempore suscipit quisquam qui, eaque veniam ipsum laborum rem rerum ut pariatur.';
        $seccion_dos->imagen = 'default_seccion_dos.jpg';
        $seccion_dos->idpagina = $pagina->id;
        $seccion_dos->save();

        $menu = new ConfigMenu;
        $menu->color = '#fff';
        $menu->background = '#2471A3';
        $menu->titulo = 'Titulo de la página';
        $menu->idpagina = $pagina->id;
        $menu->save();

        $item = new ConfigItem;
        $item->titulo = 'Inicio';
        $item->enlace = 'http://127.0.0.1:8000/'.$request->get('dominio');
        $item->idmenu = $menu->id;
        $item->icono = '<i class="fa fa-home"></i>';
        $item->save();

        $general = new ConfigGeneral;
        $general->fuente = 'Arial';
        $general->size = '10px';
        $general->logo = 'logo_default.png';
        $general->fondo_principal = 'principal_default.png';
        $general->titulo = 'Titulo de la pestaña';
        $general->favicon = 'logo_default.png';
        $general->idpagina = $pagina->id;
        $general->mapa = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2623.093286609239!2d-99.8871808888775!3d16.860355371479983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ca59cf4b7837e3%3A0x30b7cf48ee687d56!2sParque%20Papagayo!5e0!3m2!1sen!2smx!4v1666748839306!5m2!1sen!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
        $general->save();

        $footer = new ConfigFooter;
        $footer->color = '#fff';
        $footer->background = '#2471A3';
        $footer->cr = 'Derechos reservados a Titulo de página';
        $footer->direccion = 'Mi dirección';
        $footer->telefono = '123456789';
        $footer->correo = 'micorreo@cmsexample.com';
        $footer->horarios = 'Mis horarios de atención';
        $footer->idpagina = $pagina->id;
        $footer->save();

        $slider1 = new Slider;
        $slider1->titulo = 'Mi primer slider';
        $slider1->imagen = 'slider_1.jpg';
        $slider1->idpagina = $pagina->id;
        $slider1->save();

        $slider2 = new Slider;
        $slider2->titulo = 'Mi segundo slider';
        $slider2->imagen = 'slider_2.jpg';
        $slider2->idpagina = $pagina->id;
        $slider2->save();

        $slider3 = new Slider;
        $slider3->titulo = 'Mi tercer slider';
        $slider3->imagen = 'slider_3.jpg';
        $slider3->idpagina = $pagina->id;
        $slider3->save();

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
