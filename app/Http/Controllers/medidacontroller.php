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
        $sesionid = Session::get('sesionid');
       
       
        if ( $sesionid=="")
        {
         Session::flash('error', 'Es necesario iniciar sesion antes de continuar');
         return redirect()->route('iniciar_secion');
        }
        
        else
        {

        $unidades = unidades::withTrashed()
        ->get();
        if(count($unidades)==0)
			{
				$id_unidades = 1;
			}				
			else
			{
           $id_unidades = $unidades[0]->id_unidad+1;
			}	
        return view('medida.index')
        ->with('unidades',$unidades);
    }
}
    
    public function create()
    {
        $sesionid = Session::get('sesionid');
       
       
        if ( $sesionid=="")
        {
         Session::flash('error', 'Es necesario iniciar sesion antes de continuar');
         return redirect()->route('iniciar_secion');
        }
        else
        {
        return view("medida.create");
        } 
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
        $sesionid = Session::get('sesionid');
       
       
        if ( $sesionid=="")
        {
         Session::flash('error', 'Es necesario iniciar sesion antes de continuar');
         return redirect()->route('iniciar_secion');
        }
        
        else
        {

        $unidad = unidades::find($id_unidad);
        return view('medida.edit', ['unidades'=>$unidad]);
    }
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