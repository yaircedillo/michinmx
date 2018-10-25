<?php

namespace michinmx\Http\Controllers;

use Illuminate\Http\Request;

use michinmx\Http\Requests;
use michinmx\Http\Requests\UnidadMedidaRequestCreate;
use michinmx\tipo_cartas;
use Session;
use Redirect;
class UnidadMedidacontroller extends Controller
{
    public function index()
    {
        $tipos = tipo_cartas::all();
        return view('tipo_carta.index',compact('tipos'));
    }
    
    public function create()
    {
        return view("tipo_carta.create");
        
        
    }
    
    public function store(UnidadMedidaRequestCreate $request)
    {
        tipo_cartas::create([
        'id_tipo_c' => $request['id_tipo_c'],
        'nombre' => $request['nombre'],  ]);
       
     Session::flash('message','Tipo de Carta  creada exitosamente');
     return  Redirect::to('/tipo_carta');
    }
   public function show($id_estado)
   {
       
   }
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
   public function destroy($id_tipo_c)
    {
        tipo_cartas::destroy($id_tipo_c);
      
      Session::flash('message','Tipo de Carta eliminada correctamente');
      return Redirect::to('/tipo_carta');
    }
    
}