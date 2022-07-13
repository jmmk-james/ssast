<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ControllerSesion extends Controller
{
    public function sesion()
    {
        return view('admin.login.login');
    }
    public function login(Request $request)
    {
        $admin="";
        $pass= hash('ripemd160',$request->pass);
        $usuario = App\Usuario::where('usuario', $request->correo)->where('pass',$pass)->first();

        if($usuario==""){
        	session_start();	
        	session_destroy();
            return back()->with('mensaje_error','Error de usuario o contraseña, verifique los datos e intente nuevamente');
        }
        else
        {
        	session_start();
            $_SESSION['usuario']=$usuario;
            return redirect('ssast');// redirecciona a secion
        }
    }
    public function ssast(){
    	session_start();
    	if(isset($_SESSION['usuario']))
        {
            $usuario=$_SESSION['usuario'];
            $titulo="Panel SSAST";
            $titulo2="Panel SSAST";

            return view('admin.panel.escritorio',compact('usuario','titulo','titulo2'));
        }
    	else
        	return redirect('/');
    }// funcion que permite verificar y aceder al panel de inicio

    public function exit(){
        session_start();
        if(isset($_SESSION['usuario']))
        {
            $usuario=$_SESSION['usuario'];
            session_destroy();
        }
        return redirect('/');
    }// funcion que cierra el inicio de secion 
}
