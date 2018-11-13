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
        $unidades = unidades::withTrashed()
        ->get();
        return view('medida.index')
        ->with('unidades',$unidades);
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
    unidades::withTrashed()
    ->where('id_unidad',$id_unidad)
    ->restore();
    Session::flash('message','Unidad de Medida restaurada correctamente');
    return Redirect::to('/medida');
   }
    public function edit($id_unidad)
    {
        $unidad = unidades::find($id_unidad);
        return view('medida.edit', ['unidades'=>$unidad]);
    }
    public function update($id_unidad, UnidadRequestCreate $request )
    {
        $unidad = unidades::find($id_unidad);
        $unidad->fill($request->all());
        $unidad->save();
        Session::flash('message','Unidad editada correctamente');
        return  Redirect::to('/medida');
    }
   public function destroy($id_unidad)
    {
        unidades::find($id_unidad)
        ->delete();
      
      Session::flash('message','Unidad de Medida eliminada correctamente');
      return Redirect::to('/medida');
    }
    
}