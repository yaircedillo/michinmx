<?php

namespace michinmx\Http\Controllers;

use Illuminate\Http\Request;
use michinmx\Http\Requests;
use michinmx\Http\Requests\ClientesRequestCreate;
use michinmx\clientes;
use Session;
use michinmx\municipios;
use Redirect;

class clientecontroller extends Controller
{
    public function index()
    {
        
        $clientes = clientes::all();
        return view("cliente.index",compact('clientes'));
     
    }
    
    public function create()
    {
        $municipios = municipios::all();
        $clientes = clientes::all();
        return view("cliente.create",compact('cliente','municipios'));
        
    }
    
    public function store(ClientesRequestCreate $request)
    {
        clientes::create([
            'id_cliente' => $request['id_cliente'],
            'nombre' => $request['nombre'],  
            'ap_pat' => $request['ap_pat'],  
            'ap_mat' => $request['ap_mat'],  
            'genero' => $request['genero'],  
            'calle' => $request['calle'],  
            'colonia' => $request['colonia'],  
            'cp' => $request['cp'],  
            'correo' => $request['correo'],  
            'telefono' => $request['telefono'],  
            'id_municipios' => $request['id_municipios'],  
          

            ]);

            Session::flash('message','Cliente   registrado exitosamente');
            return  Redirect::to('/cliente');
    }
   public function show($id_proveedores)
   {
       
   }
    public function edit($id_cliente)
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
