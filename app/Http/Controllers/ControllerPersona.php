<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App;

class ControllerPersona extends Controller
{
    //
    public function listaPersona()
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $usuario=$_SESSION['usuario'];
            $titulo="Panel SSAST";
            $titulo2="Lista de Personas";
            $lista_persona=App\Persona::all();
            
            $id_search="1";
            $tipo="Buscar Nombre de la Carrera";
            $funcion="searchCarrera";
            $uri=array('id_search'=>0,'search'=>0);
            return view('admin.persona.lista_persona',compact('usuario','lista_persona','titulo','titulo2','id_search','tipo','funcion','uri'));
        }
    	else
        	return redirect('/');
    }
    public function searchPersona(Request $request)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $uri=array('id_search'=>$request->id_search,'search'=>$request->search);
            return redirect(route('listaPersona'));
        }
    	else
        	return redirect('/');
    }
    public function formularioPersona()
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $usuario=$_SESSION['usuario'];
            $titulo="Panel SSAST";
            $titulo2="Agregar Persona";
            $cargo=App\Cargo::all();
            $reparticion=App\Reparticion::all();

            $id_search="1";
            $tipo="Buscar Nombre de la Carrera";
            $funcion="searchCarrera";
            $uri=array('id_search'=>0,'search'=>0);

            return view('admin.persona.formulario_persona',compact('usuario','titulo','titulo2','id_search','tipo','funcion','uri','cargo','reparticion'));
        }
    	else
        	return redirect('/');
    }
    public function agregarPersona(Request $request)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $persona=new App\Persona;
            $persona->item=$request->item;
            $persona->nombre=ucwords($request->nombre);
            $persona->estado=0;
            $persona->save();
            $uri=array('id_search'=>0,'search'=>0);
            return redirect(route('listaPersona'));
        }
    	else
        	return redirect('/');
    }
    public function updatePersona(Request $request)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $persona=App\Persona::findOrFail($request->id_persona);
            $persona->nombre=ucwords($request->persona);
            $persona->save();
            $uri=array('id_search'=>0,'search'=>0);
            return redirect(route('listaPersona'));
        }
    	else
        	return redirect('/');
    }
    public function eliminarPersona($id_persona)
    {
        session_start();
        if(isset($_SESSION['usuario']))
        {
            $persona=App\Persona::findOrFail($id_persona);
            $persona->save();
            $uri=array('id_search'=>0,'search'=>0);
            return redirect(route('listaPersona'));

        }
        else
            return redirect('/');
    }
    public function editarPersona($id_persona)
    {
        session_start();
        if(isset($_SESSION['usuario']))
        {
            $usuario=$_SESSION['usuario'];
            $titulo="Panel SSAST";
            $persona=App\Persona::findOrFail($id_persona);
            $titulo2="Editar Carrera : ".$persona->nombre;

            $id_search="1";
            $tipo="Buscar Nombre de la Carrera";
            $funcion="searchCarrera";
            $uri=array('id_search'=>0,'search'=>0);
            
            return view('admin.persona.editar_persona',compact('usuario','persona','titulo','titulo2','id_search','tipo','funcion','uri'));

        }
        else
            return redirect('/');
    }
}
