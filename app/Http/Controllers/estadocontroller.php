<?php
namespace michinmx\Http\Controllers;
use michinmx\Http\Requests;
use michinmx\Http\Requests\EstadoRequestCreate;
use michinmx\estados;
use Session;
use Redirect;
use Illuminate\Http\Request;
class estadocontroller extends Controller
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

        $estados = estados::all()
        ->take(10);
        return view('estado.index')
        ->with('estados',$estados);
       
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

        return view("estado.create");
        
        }
    }
    
    public function store(EstadoRequestCreate $request)
    {
      estados::create([
        'id_estado' => $request['id_estado'],
        'estado' => $request['estado'],  ]);
       
     Session::flash('message','Estado creado exitosamente');
     return  Redirect::to('/estado');
    }
   public function show($id_estado)
   {
       
   }
    public function edit($id_estado)
    {
       $sesionid = Session::get('sesionid');
       
       
        if ( $sesionid=="")
        {
         Session::flash('error', 'Es necesario iniciar sesion antes de continuar');
         return redirect()->route('iniciar_secion');
        }
        
        else
        {

      $estado = estados::find($id_estado);
      return view('estado.edit', ['estado'=>$estado]);
    }
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