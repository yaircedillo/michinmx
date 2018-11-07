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
        'fecha_final' => $request['fecha_final'], 
        'horario' => $request['horario'],
        
        ]);
       
     Session::flash('message','Promoción creado exitosamente');
     return  Redirect::to('/promociones');
    }
   public function show($id_promocion)
   {
       
   }
    public function edit($id_promocion)
    {
        $promociones = promociones::find($id_promocion);
            return view('promociones.edit', ['promociones'=>$promociones,'promociones'=>$promociones]);
    }
    public function update($id_promocion, Request $request )
    {
        $promociones = promociones::find($id_promocion);
        $promociones->fill($request->all());
        $promociones->save();
        Session::flash('message','Promocíón editada correctamente');
        return  Redirect::to('/promociones');
    }
   public function destroy($id_promocion)
    {
      promociones::destroy($id_promocion);
      
      Session::flash('message','Estado eliminado correctamente');
      return Redirect::to('/promociones');
    }
    
}