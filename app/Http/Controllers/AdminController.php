<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    public function index(){
        $users = DB::table('users')
        ->where('role','=','USUARIO')
        ->paginate(3);

        $dominios = DB::table('pagina')
        ->get();

        return view('panel.usuarios.index',compact('users','dominios'));
    }
}
