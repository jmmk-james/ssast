<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class ControllerReparticion extends Controller
{
    //
    public function listaReparticion()
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $usuario=$_SESSION['usuario'];
            $titulo="Panel SSAST";
            $titulo2="Lista de Reparticiones";
            $lista_reparticion=App\Reparticion::all();
            
            $id_search="1";
            $tipo="Buscar Nombre de la Carrera";
            $funcion="searchCarrera";
            $uri=array('id_search'=>0,'search'=>0);
            return view('admin.reparticion.lista_reparticion',compact('usuario','lista_reparticion','titulo','titulo2','id_search','tipo','funcion','uri'));
        }
    	else
        	return redirect('/');
    }
    public function searchReparticion(Request $request)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $uri=array('id_search'=>$request->id_search,'search'=>$request->search);
            return redirect(route('listaReparticion'));
        }
    	else
        	return redirect('/');
    }
    public function formularioReparticion()
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $usuario=$_SESSION['usuario'];
            $titulo="Panel SSAST";
            $titulo2="Agregar Reparticion";

            $id_search="1";
            $tipo="Buscar Nombre de la Carrera";
            $funcion="searchCarrera";
            $uri=array('id_search'=>0,'search'=>0);

            return view('admin.reparticion.formulario_reparticion',compact('usuario','titulo','titulo2','id_search','tipo','funcion','uri'));
        }
    	else
        	return redirect('/');
    }
    public function agregarReparticion(Request $request)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $reparticion=new App\Reparticion;
            $reparticion->reparticion=ucwords($request->reparticion);
            $reparticion->save();
            $uri=array('id_search'=>0,'search'=>0);
            return redirect(route('listaReparticion'));
        }
    	else
        	return redirect('/');
    }
    public function updateReparticion(Request $request)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $reparticion=App\Reparticion::findOrFail($request->id_reparticion);
            $reparticion->reparticion=ucwords($request->reparticion);
            $reparticion->save();
            $uri=array('id_search'=>0,'search'=>0);
            return redirect(route('listaReparticion'));
        }
    	else
        	return redirect('/');
    }
    public function eliminarReparticion($id_reparticion)
    {
        session_start();
        if(isset($_SESSION['usuario']))
        {
            $reparticion=App\Reparticion::findOrFail($id_reparticion);
            $reparticion->save();
            $uri=array('id_search'=>0,'search'=>0);
            return redirect(route('listaReparticion'));

        }
        else
            return redirect('/');
    }
    public function editarReparticion($id_reparticion)
    {
        session_start();
        if(isset($_SESSION['usuario']))
        {
            $usuario=$_SESSION['usuario'];
            $titulo="Panel SSAST";
            $reparticion=App\Reparticion::findOrFail($id_reparticion);
            $titulo2="Editar Carrera : ".$reparticion->reparticion;

            $id_search="1";
            $tipo="Buscar Nombre de la Carrera";
            $funcion="searchCarrera";
            $uri=array('id_search'=>0,'search'=>0);
            
            return view('admin.reparticion.editar_reparticion',compact('usuario','reparticion','titulo','titulo2','id_search','tipo','funcion','uri'));

        }
        else
            return redirect('/');
    }
}
