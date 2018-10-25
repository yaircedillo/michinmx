<?php

namespace michinmx\Http\Controllers;
use Illuminate\Http\Request;
use michinmx\Http\Requests;
use michinmx\Http\Requests\PromocionRequestCreate;
use michinmx\promociones;
use Session;
use Redirect;
class promocioncontroller extends Controller
{
    public function index()
    {
        $promociones = promociones ::all();
        return view('promociones.index',compact('promociones'));
    }
    
    public function create()
    {
        return view("promociones.create");
        
        
    }
    
    public function store(PromocionRequestCreate $request)
    {
        promociones ::create([
        'id_promocion' => $request['id_promocion'],
        'descripcion' => $request['descripcion'], 
        'descripcion' => $request['descripcion'], 
        'fecha_inicio' => $request['fecha_inicio'], 
        'fecha_final' => $request['fecha_inicio'], 
        'horario' => $request['horario'],
        
        ]);
       
     Session::flash('message','Promoción creado exitosamente');
     return  Redirect::to('/promociones');
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
        return  Redirect::to('/promociones');
    }
   public function destroy($id_promocion)
    {
      promociones::destroy($id_promocion);
      
      Session::flash('message','Estado eliminado correctamente');
      return Redirect::to('/promociones');
    }
    
}