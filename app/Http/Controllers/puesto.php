<?php

namespace michinmx\Http\Controllers;

use Illuminate\Http\Request;

use michinmx\Http\Requests;
use michinmx\Http\Requests\PuestoRequestCreate;
use michinmx\puestos;
use Session;
use Redirect;
class puesto extends Controller
{
    public function index()
    {
        $puestos = puestos::all();
        return view('puestos.index',compact('puestos'));
    }
    
    public function create()
    {
        return view("puestos.create");
        
        
    }
    
    public function store(PuestoRequestCreate $request)
    {
        puestos::create([
        'id_puesto' => $request['id_puestos'],
        'puesto' => $request['puesto'], 
         ]);
       
     Session::flash('message','Puesto creado exitosamente');
     return  Redirect::to('/puesto');
    }
   public function show($id_puesto)
   {
       
   }
    public function edit($id_puesto)
    {
      $puesto = puestos::find($id_puesto);
      return view('puestos.edit', ['puesto'=>$puesto]);
    }
    public function update($id_puesto, Request $request )
    {
        $puesto = puestos::find($id_puesto);
        $puesto->fill($request->all());
        $puesto->save();
        Session::flash('message','Puesto editado correctamente');
        return  Redirect::to('/puesto');
    }
   public function destroy($id_puesto)
    {
        puestos::destroy($id_puesto);
      
      Session::flash('message','Puesto eliminado correctamente');
      return Redirect::to('/puesto');
    }
    
}