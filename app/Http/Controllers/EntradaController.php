<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntradaController extends Controller
{
    public function index(){
        return view('admin.entrada.index');
    }

    function create(){
        return view('admin.entrada.create');
    }
}
