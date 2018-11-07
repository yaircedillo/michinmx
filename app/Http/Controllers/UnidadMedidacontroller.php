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
        $tipos = tipo_cartas::withTrashed()
        ->get();
        return view('tipo_carta.index')
        ->with('tipos',$tipos);
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
   public function show($id_tipo_c)
   {
    tipo_cartas::withTrashed()
    ->where('id_tipo_c',$id_tipo_c)
    ->restore();
    Session::flash('message','Tipo de carta  restaurada correctamente');
    return Redirect::to('/tipo_carta');
   }
    public function edit($id_tipo_c)
    {
        $tipo_cartas = tipo_cartas::find($id_tipo_c);
        return view('tipo_carta.edit', ['tipo_cartas'=>$tipo_cartas]);
    }
    public function update($id_tipo_c, Request $request )
    {
        $tipo_cartas = tipo_cartas::find($id_tipo_c);
        $tipo_cartas->fill($request->all());
        $tipo_cartas->save();
        Session::flash('message','Tipo de carta editada correctamente');
        return  Redirect::to('/tipo_carta');
    }
   public function destroy($id_tipo_c)
    {
        tipo_cartas::find($id_tipo_c)
        ->delete();
      
      Session::flash('message','Tipo de Carta eliminada correctamente');
      return Redirect::to('/tipo_carta');
    }
    
}