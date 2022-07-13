<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App;
class ControllerGanador extends Controller
{
    //
    public function listaGanador()
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $usuario=$_SESSION['usuario'];
            $titulo="Panel SSAST";
            $titulo2="Lista de Ganadores";
            $lista_ganador=DB::table('view_datos_ganador')->get();
            $id_search="1";
            $tipo="Buscar Nombre de la Carrera";
            $funcion="searchPremio";
            $uri=array('id_search'=>0,'search'=>0);
            return view('admin.ganador.lista_ganador',compact('usuario','lista_ganador','titulo','titulo2','id_search','tipo','funcion','uri'));
        }
    	else
        	return redirect('/');
    }
    public function reiniciarGanador()
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $usuario=$_SESSION['usuario'];
            $titulo="Panel SSAST";
            $titulo2="Lista de Ganadores";
            DB::update('update personas set estado = 0');
            App\Ganador::query()->delete();

            $id_search="1";
            $tipo="Buscar Nombre de la Carrera";
            $funcion="searchPremio";
            $uri=array('id_search'=>0,'search'=>0);
            return redirect(route('listaGanador'));
        }
    	else
        	return redirect('/');
    }
}
