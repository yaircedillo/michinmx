<?php

namespace michinmx\Http\Controllers;

use Illuminate\Http\Request;

use michinmx\Http\Requests;
use michinmx\estados;
use Session;
use Redirect;


class estadocontroller extends Controller
{
  

    public function index()
    {
        $estados = estados::all();
        return view('estado.index',compact('estados'));
    }
    
    public function create()
    {
        return view("estado.create");
        
        
    }
    
    public function store(Request $request)
    {
      estados::create([
        'id_estado' => $request['id_estado'],
        'estado' => $request['estado'],
       ]);
       Session::flash('message','Estado creado exitosamente');
       return  Redirect::to('/estado');
    }
   //public function show($id_estado)
    //{
       //
   // }
    public function edit($id_estado)
    {
      $estado = estados::find($id_estado);
      return view('estado.edit', ['estado'=>$estado]);
    }
    public function update($id_estado, Request $request )
    {
        $estado = estados::find($id_estado);
        $estado->fill($request->all());
        $estado->save();


        Session::flash('message','Estado editado correctamente');
        return  Redirect::to('/estado');
    }
   public function destroy($id_estado)
    {
      estados::destroy($id_estado);
      
      Session::flash('message','Estado eliminado correctamente');
      return Redirect::to('/estado');
    }
}