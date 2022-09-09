<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DominioController extends Controller
{
    public function open_page($dominio){
        $pagina = DB::table('pagina')
        ->where('dominio','=',$dominio)
        ->first();
        
        if(!$pagina){
            abort('404');
        } else{
            $idpagina = $pagina->{'id'};
            $idplantilla = $pagina->{'idplantilla'};

            dd($idplantilla);

            $menu = DB::table('config_menu')
            ->where('idpagina','=',$idpagina)
            ->first();

            $idmenu = $menu->{'id'};

            $items_menu = DB::table('config_item')
            ->where('idmenu','=',$idmenu)
            ->get();

            $general = DB::table('config_general')
            ->where('idpagina','=',$idpagina)
            ->first();

            $footer = DB::table('config_footer')
            ->where('idpagina','=',$idpagina)
            ->first();

            $entrada = DB::table('entrada')
            ->where('idpagina','=',$idpagina)
            ->get();

            $equipo = DB::table('equipo')
            ->where('idpagina','=',$idpagina)
            ->get();

            $enlace = DB::table('enlace')
            ->where('idpagina','=',$idpagina)
            ->get();

            $galeria = DB::table('galeria')
            ->where('idpagina','=',$idpagina)
            ->get();

            $seccion_uno = DB::table('seccion_uno')
            ->where('idpagina','=',$idpagina)
            ->first();

            $seccion_dos = DB::table('seccion_dos')
            ->where('idpagina','=',$idpagina)
            ->first();

            $slider = DB::table('slider')
            ->where('idpagina','=',$idpagina)
            ->get();

            $blog = DB::table('blog')
            ->where('idpagina','=',$idpagina)
            ->get();

            /* return view('plantillas.'.$idplantilla.'.admin'); */
        }
    }
}
