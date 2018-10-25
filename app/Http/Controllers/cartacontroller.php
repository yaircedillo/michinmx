<?php

namespace michinmx\Http\Controllers;

use Illuminate\Http\Request;

use michinmx\Http\Requests;
use michinmx\Http\Requests\CartaRequestCreate;
use michinmx\cartas;
use Session;
use michinmx\tipo_cartas;
use michinmx\personales;
use Redirect;
class cartacontroller extends Controller
{
    public function index()
    {
        
        $cartas = cartas::all();
        return view("carta.index",compact('cartas'));
     
    }
    
    public function create()
    {
        $tipos = tipo_cartas::all();
        $cartas = cartas::all();
        $personales = personales::all();
        return view("carta.create",compact('cartas','personales','tipos'));
        
    }
    
    public function store(CartaRequestCreate $request)
    {
        cartas::create([
            'id_carta' => $request['id_carta'],
            'nombre' => $request['nombre'],  
            'descripcion' => $request['descripcion'],  
            'precio' => $request['precio'],   
            'id_tipo_c' => $request['id_tipo_c'],  
            'id_personal' => $request['id_personal'],  
            ]);

            Session::flash('message','Carta registrada exitosamente');
            return  Redirect::to('/carta');
    }
   public function show($id_carta)
   {
       
   }
    public function edit($id_carta)
    {
        $municipios = municipios::find($id_municipios);
        $cliente = clientes::find($id_cliente);
        return view('cliente.edit', ['cliente'=>$cliente,'municipios'=>$municipios]);
    }
    public function update($id_cliente, Request $request )
    {   
        $cliente = clientes::find($id_cliente);
        $cliente->fill($request->all());
        $cliente->save();


        Session::flash('message','Estado editado correctamente');
        return  Redirect::to('/cliente');
    }
   public function destroy($id_cliente)
    {
        clientes::destroy($id_cliente);
      
        Session::flash('message','Cliente eliminado correctamente');
        return Redirect::to('/cliente');
    }
}
