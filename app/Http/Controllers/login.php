<?php

namespace michinmx\Http\Controllers;
use Illuminate\Http\Request;
use michinmx\Http\Requests;
use Redirect;
use Session;
use michinmx\usuario;
class login extends Controller
{
   public function login()
   {
      return view ('layouts.login');
   }
   public function valida(Request $request)
   {
	  $user = $request->user;
      $password = $request->password;
	   $this->validate($request,[
	     'user'=>'required',
		   'password'=>'required',
	     ]);
	$consulta= usuario::withTrashed()->where('user',$user)->where('password','=',$password)->get();
	if(count($consulta)==0)
	{
		 Session::flash('error', 'El usuario o password no existe');
		 return redirect()->route('iniciar_secion');
	}
	else
    {
		if($consulta[0]->deleted_at!="")
		{
		Session::flash('error', 'El usuario esta desactivado, favor de consultar a su administrador');
		 return redirect()->route('iniciar_secion');
		}
		else
		{
		  Session::put('sesionname',$consulta[0]->name);
		  Session::put('sesionid',$consulta[0]->id);
			Session::put('sesiontipo',$consulta[0]->tipo);
			
		  return redirect()->route('admin');
		}
	}		
		
		 
   }
   public function admin()
   { 
	   $id = Session::get('sesionid');
	   $name = Session::get('sesionname');
		 $tipo = Session::get('sesiontipo');
		
	  
      if(Session::get('sesionid')!="")
	  {
	   return view ('vista.index');
	  }
	  
	  else
	  {
		 Session::flash('error', 'Es necesario iniciar sesion antes de continuar');
		 return redirect()->route('iniciar_secion');
	  }
   }
   public function cerrarsesion()
   {
	    Session::forget('sesionname');
	   Session::forget('sesionid');
	   Session::forget('sesiontipo');
	   Session::flush();
	   Session::flash('error', 'Session Cerrada Correctamente');
	   return redirect()->route('iniciar_secion');
   }
}









