<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ControllerCargo extends Controller
{
    public function listaCargo()
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $usuario=$_SESSION['usuario'];
            $titulo="Panel SSAST";
            $titulo2="Lista de Cargos";
            $lista_cargo=App\Cargo::all();
            
            $id_search="1";
            $tipo="Buscar Nombre de la Carrera";
            $funcion="searchCarrera";
            $uri=array('id_search'=>0,'search'=>0);
            return view('admin.cargo.lista_cargo',compact('usuario','lista_cargo','titulo','titulo2','id_search','tipo','funcion','uri'));
        }
    	else
        	return redirect('/');
    }
    public function searchCargo(Request $request)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $uri=array('id_search'=>$request->id_search,'search'=>$request->search);
            return redirect(route('listaCargo'));
        }
    	else
        	return redirect('/');
    }
    public function formularioCargo()
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $usuario=$_SESSION['usuario'];
            $titulo="Panel SSAST";
            $titulo2="Agregar Cargo";

            $id_search="1";
            $tipo="Buscar Nombre de la Carrera";
            $funcion="searchCarrera";
            $uri=array('id_search'=>0,'search'=>0);

            return view('admin.cargo.formulario_cargo',compact('usuario','titulo','titulo2','id_search','tipo','funcion','uri'));
        }
    	else
        	return redirect('/');
    }
    public function agregarCargo(Request $request)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $cargo=new App\Cargo;
            $cargo->cargo=ucwords($request->cargo);
            $cargo->save();
            $uri=array('id_search'=>0,'search'=>0);
            return redirect(route('listaCargo'));
        }
    	else
        	return redirect('/');
    }
    public function updateCargo(Request $request)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $cargo=App\Cargo::findOrFail($request->id_cargo);
            $cargo->nombre=ucwords($request->cargo);
            $cargo->save();
            $uri=array('id_search'=>0,'search'=>0);
            return redirect(route('listaCargo'));
        }
    	else
        	return redirect('/');
    }
    public function eliminarCargo($id_cargo)
    {
        session_start();
        if(isset($_SESSION['usuario']))
        {
            $cargo=App\Cargo::findOrFail($id_cargo);
            $cargo->save();
            $uri=array('id_search'=>0,'search'=>0);
            return redirect(route('listaCargo'));

        }
        else
            return redirect('/');
    }
    public function editarCargo($id_cargo)
    {
        session_start();
        if(isset($_SESSION['usuario']))
        {
            $usuario=$_SESSION['usuario'];
            $titulo="Panel SSAST";
            $cargo=App\Cargo::findOrFail($id_cargo);
            $titulo2="Editar Carrera : ".$cargo->nombre;

            $id_search="1";
            $tipo="Buscar Nombre de la Carrera";
            $funcion="searchCarrera";
            $uri=array('id_search'=>0,'search'=>0);
            
            return view('admin.carrera.editar_carrera',compact('usuario','cargo','titulo','titulo2','id_search','tipo','funcion','uri'));

        }
        else
            return redirect('/');
    }
}
