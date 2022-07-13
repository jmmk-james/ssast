<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class ControllerPremio extends Controller
{
    public function listaPremio()
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $usuario=$_SESSION['usuario'];
            $titulo="Panel SSAST";
            $titulo2="Lista de Premios";
            $lista_premio=App\Premio::all();
            
            $id_search="1";
            $tipo="Buscar Nombre de la Carrera";
            $funcion="searchPremio";
            $uri=array('id_search'=>0,'search'=>0);
            return view('admin.premio.lista_premio',compact('usuario','lista_premio','titulo','titulo2','id_search','tipo','funcion','uri'));
        }
    	else
        	return redirect('/');
    }
    public function searchPremio(Request $request)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $uri=array('id_search'=>$request->id_search,'search'=>$request->search);
            return redirect(route('listaPremio'));
        }
    	else
        	return redirect('/');
    }
    public function formularioPremio()
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $usuario=$_SESSION['usuario'];
            $titulo="Panel SSAST";
            $titulo2="Agregar Premio";

            $id_search="1";
            $tipo="Buscar Nombre de la Carrera";
            $funcion="searchCarrera";
            $uri=array('id_search'=>0,'search'=>0);

            return view('admin.premio.formulario_premio',compact('usuario','titulo','titulo2','id_search','tipo','funcion','uri'));
        }
    	else
        	return redirect('/');
    }
    public function agregarPremio(Request $request)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $imagen=$request->file('imagen')->store('public/premio');
            $imagen=str_replace('public/premio/','', $imagen);

            $premio=new App\Premio;
            $premio->Premio=ucwords($request->premio);
            $premio->detalle=ucwords($request->detalle);
            $premio->imagen=$imagen;
            $premio->save();
            $uri=array('id_search'=>0,'search'=>0);
            return redirect(route('listaPremio'));
        }
    	else
        	return redirect('/');
    }
    public function updatePremio(Request $request)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            
            $premio=App\Premio::findOrFail($request->id_premio);
            $premio->premio=ucwords($request->premio);
            $premio->detalle=$request->detalle;
            $premio->save();
            $uri=array('id_search'=>0,'search'=>0);
            return redirect(route('listaPremio'));
        }
    	else
        	return redirect('/');
    }
    public function eliminarPremio($id_premio)
    {
        session_start();
        if(isset($_SESSION['usuario']))
        {
            $premio=App\Premio::findOrFail($id_premio);
            $premio->save();
            $uri=array('id_search'=>0,'search'=>0);
            return redirect(route('listaPremio'));

        }
        else
            return redirect('/');
    }
    public function editarPremio($id_premio)
    {
        session_start();
        if(isset($_SESSION['usuario']))
        {
            $usuario=$_SESSION['usuario'];
            $titulo="Panel SSAST";
            $premio=App\Premio::findOrFail($id_premio);
            $titulo2="Editar Premio : ".$premio->premio;

            $id_search="1";
            $tipo="Buscar Nombre de la Carrera";
            $funcion="searchCarrera";
            $uri=array('id_search'=>0,'search'=>0);
            
            return view('admin.premio.editar_premio',compact('usuario','premio','titulo','titulo2','id_search','tipo','funcion','uri'));

        }
        else
            return redirect('/');
    }
}
