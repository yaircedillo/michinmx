<?php

namespace michinmx\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use Redirect;
use michinmx\Http\Requests\reservarequest;
use michinmx\Http\Requests;

class iniciocontroller extends Controller
{
    public function index(){
   
    }
        public function store(reservarequest $request)
        {
           Mail::send('emails.contact',$request->all(), function($msj){
            $msj->subject('Correo de Reservación');
            $msj->to('contacto@michinmx.online');
           });

        Session::flash('message','Mensaje enviado Correctamente');
        return Redirect::to('/');
        }  
}
