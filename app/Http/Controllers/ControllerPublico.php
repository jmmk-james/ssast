<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerPublico extends Controller
{
    //
    public function index()
    {
        $lista_ganador=DB::table('view_datos_ganador')->get();
        return view('publico.inicio',compact('lista_ganador'));
    }
}
