<?php

namespace michinmx\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use Redirect;
use michinmx\Http\Requests;

class mailcontroller extends Controller
{
    public function index(){
   
    }
        public function store(Request $request)
        {
           Mail::send('emails.contact',$request->all(), function($msj){
            $msj->subject('Correo de Contacto');
            $msj->to('al221610420@gmail.com');
           });

        Session::flash('message','Mensaje enviado Correctamente');
        return Redirect::to('/');
        }
        
           
}
        

