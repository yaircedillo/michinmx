<?php

namespace michinmx\Http\Controllers;

use Illuminate\Http\Request;
use michinmx\Http\Requests;
use michinmx\Http\Requests\UnidadRequestCreate;
use michinmx\unidades;
use Session;
use Redirect;
class medidacontroller extends Controller
{
    public function index()
    {
        $unidades = unidades::all();
        return view('medida.index',compact('unidades'));
    }
    
    public function create()
    {
        return view("medida.create");
        
        
    }
    
    public function store(UnidadRequestCreate $request)
    {
        unidades::create([
        'id_unidad' => $request['id_unidad'],
        'medida' => $request['medida'],  ]);
       
     Session::flash('message','Unidad de medida  creada exitosamente');
     return  Redirect::to('/medida');
    }
   public function show($id_unidad)
   {
       
   }
    public function edit($id_unidad)
    {
      $estado = unidades::find($id_unidad);
      return view('estado.edit', ['estado'=>$estado]);
    }
    public function update($id_unidad, Request $request )
    {
        $estado = unidades::find($id_unidad);
        $estado->fill($request->all());
        $estado->save();
        Session::flash('message','Estado editado correctamente');
        return  Redirect::to('/estado');
    }
   public function destroy($id_unidad)
    {
        unidades::destroy($id_unidad);
      
      Session::flash('message','Unidad de Medida eliminada correctamente');
      return Redirect::to('/medida');
    }
    
}