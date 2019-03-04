<?php

namespace michinmx\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use Redirect;
use michinmx\Http\Requests\contactorequest;
use michinmx\Http\Requests;

class contacto extends Controller
{
    public function index(){
   
    }
        public function store(contactorequest $request)
        {
           Mail::send('emails.formulario',$request->all(), function($msj){
            $msj->subject('Correo de Contacto');
            $msj->to('contacto@michinmx.online');
           });

        Session::flash('message','Mensaje enviado Correctamente');
        return Redirect::to('/contactanos');
        }
}
