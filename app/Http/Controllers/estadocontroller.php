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
        'estado'    => $request['estado'],
       ]);
       return redirect('/estado')->with('message','store');
    }
   // public function show($id)
    //
        //
   // }
    public function edit($id_estado)
    {
      $estado = estados::where($id_estado);
      return view('estado.edit', ['estado'=>$estado]);
    }
    public function update(Request $request, $id_estado)
    {
        //
    }
   // public function destroy($id)
   // {
        //
  //  }
}