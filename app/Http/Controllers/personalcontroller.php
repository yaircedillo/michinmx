<?php

namespace michinmx\Http\Controllers;

use Illuminate\Http\Request;

use michinmx\Http\Requests;

class personalcontroller extends Controller
{
    public function index()
    {
        $estados = estados::paginate(5);
        return view('estado.index',compact('estados'));
    }
    
    public function create()
    {
        return view("personal.create");
        
        
    }
    
    public function store(EstadoRequestCreate $request)
    {
      estados::create([
        'id_personal' => $request['id_personal'],
        'personal' => $request['personal'],
       ]);
       
       Session::flash('message','Estado creado exitosamente');
       return  Redirect::to('/estado');
    }
   public function show($id_personal)
   {
       
   }
    public function edit($id_personal)
    {
      $personal = personales::find($id_personal);
      return view('personal.edit', ['personal'=>$personales]);
    }
    public function update($id_personal, Request $request )
    {
        $personal = personales::find($id_perosnal);
        $personal->fill($request->all());
        $personal->save();


        Session::flash('message','Personal editado correctamente');
        return  Redirect::to('/personal');
    }
   public function destroy($id_personal)
    {
      estados::destroy($id_personal);
      
      Session::flash('message','Personal eliminado correctamente');
      return Redirect::to('/personal');
    }
}
