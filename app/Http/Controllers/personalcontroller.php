<?php

namespace michinmx\Http\Controllers;

use Illuminate\Http\Request;
use michinmx\Http\Requests;
use michinmx\Http\Requests\PesonalesRequestCreate;
use michinmx\personales;
use Session;
use michinmx\puestos;
use michinmx\municipios;
use Redirect;


class personalcontroller extends Controller
{
    public function index()
    {
        
        $personales = personales::all();
        return view("personal.index",compact('personales'));
     
    }
    
    public function create()
    {
        $puestos = puestos::all();
        $municipios = municipios::all();
        return view("personal.create",compact('puestos','municipios'));
        
    }
    
    public function store( PesonalesRequestCreate $request)
    {
        personales::create([
            'id_personales' => $request['id_personales'],
            'nombre' => $request['nombre'],  
            'ap_pat' => $request['ap_pat'],  
            'ap_mat' => $request['ap_mat'],  
            'genero' => $request['genero'],  
            'calle' => $request['calle'],  
            'colonia' => $request['colonia'],  
            'cp' => $request['cp'],  
            'correo' => $request['correo'],  
            'telefono' => $request['telefono'],  
            'id_municipios' => $request['id_municipios'],  
            'id_puesto' => $request['id_puesto'], 

            ]);

            Session::flash('message','Personal registrado exitosamente');
            return  Redirect::to('/personal');
    }
   public function show($id_personal)
   {
       
   }
    public function edit($id_personal)
    {
     
    }
    public function update($id_personal, Request $request )
    {
       
    }
   public function destroy($id_personales)
    {
        personales::destroy($id_personales);
      
        Session::flash('message','Personal eliminado correctamente');
        return Redirect::to('/personal');
    }
}
