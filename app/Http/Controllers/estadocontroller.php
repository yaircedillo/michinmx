<?php

namespace michinmx\Http\Controllers;

use Illuminate\Http\Request;

use michinmx\Http\Requests;
use michinmx\estados;
class estadocontroller extends Controller
{
  

    public function index()
    {
        $estados = \michinmx\estados::All();
        return view('estado.index',compact('estados'));
    }
    
    public function create()
    {
       // $incrementing = estados::orderBy('id_estado','desc')
       // ->take(1)
        //->get();
       // $idest = $incrementing[0]->id_estado+1;

        return view("estado.create");
        //->with(['idest',$idest]);
    }
    
    public function store(Request $request)
    {
       \michinmx\estados::create([
        'id_estado' => $request['id_estado'],
        'estado'  => $request['estado'],
       ]);
    
       return redirect('/estado')->with('message','store');
    }
    
    public function show($id)
    {
        //
    }
    
    public function edit($id)
    {
        //
    }
    
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}