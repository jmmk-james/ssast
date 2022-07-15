<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App;

class ControllerSorteo extends Controller
{
    //
    public function formularioSorteo()
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $usuario=$_SESSION['usuario'];
            $titulo="Panel SSAST";
            $titulo2="Sorteo";
            $lista_persona=App\Persona::where('estado',0)->orderByRaw('RAND()')->get();
            $lista_ganador=App\Persona::where('estado',1)->get();
            $premio=App\Premio::all();
            
            $id_search="1";
            $tipo="Buscar Nombre de la Carrera";
            $funcion="searchCarrera";
            $uri=array('id_search'=>0,'search'=>0);

            return view('admin.sorteo.formulario_sorteo',compact('usuario','titulo','titulo2','id_search','tipo','funcion','uri','lista_persona','lista_ganador','premio'));
        }
    	else
        	return redirect('/');
    }
    public function agregarSorteo(Request $request)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            if(isset($request->id_persona)){
                $ganador=new App\Ganador;
                $ganador->id_persona=$request->id_persona;
                $ganador->id_premio=$request->id_premio;
                $ganador->save();
                
                $persona=App\Persona::findOrFail($request->id_persona);
                $persona->estado=1;
                $persona->save();
                $uri=array('id_search'=>0,'search'=>0);
                return redirect(route('formularioSorteo'));
            }
            else
            return back()->with('mensaje_error','Error Debes de seleccionar un ganador');
        }
    	else
        	return redirect('/');
    }
}
