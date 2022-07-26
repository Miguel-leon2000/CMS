<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ConfigMenu;
use App\ConfigItem;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;

class ConfigMenuController extends Controller
{
    function index(){

        $pagina = DB::table('users')
        ->where('current_page','=',auth()->user()->current_page)
        ->first();

        $current_page = $pagina->{'current_page'};

        $menu = DB::table('config_menu')
        ->where('idpagina','=',$current_page)
        ->first();

        return view('admin.menu.index', compact('menu'));
    }

    function update(Request $request, $id){
        $validate = $this->validate($request,[
            'titulo' => 'required|max:250',
            'color' => 'required|max:50',
            'background' => 'required|max:50',

        ]);

        $menu = ConfigMenu::findOrFail($id);
        $menu->titulo = $request->get('titulo');
        $menu->color = $request->get('color');
        $menu->background = $request->get('background');
        $menu->update();

        Session::flash('succes', 'Se actualizó el menú con exito.');
        return Redirect::to('admin/configuracion/menu');
        
    }
}
