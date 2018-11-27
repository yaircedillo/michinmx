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
        
        $clientes = clientes::withTrashed()
        ->get();
        return view("cliente.index")
        ->with('clientes',$clientes);
     
    }
    
    public function create()
    {
        $municipios = municipios::all();
        $clientes = clientes::withTrashed();
      
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
            'telefono_c' => $request['telefono_c'],  
            'id_municipios' => $request['id_municipios'],  
          

            ]);

            Session::flash('message','Cliente   registrado exitosamente');
            return  Redirect::to('/cliente');
    }
   public function show($id_cliente)
   {
    clientes::withTrashed()
    ->where('id_cliente',$id_cliente)
    ->restore();
    Session::flash('message','Cliente restaurado correctamente');
    return Redirect::to('/cliente');
   }
    public function edit($id_cliente)
    {

      
        $cliente = clientes::where('id_cliente','=',$id_cliente)
        ->get();
		
		$id_municipios = $cliente[0]->id_municipios;
		
		$municipios = municipios::where('id_municipios','=',$id_municipios)
		->get();
		$demasmunicipios = municipios::where('id_municipios','!=',$id_municipios)
		                           ->get();
		
		
		return view('cliente.edit')
	                             ->with('cliente',$cliente[0])
								 ->with('id_municipios',$id_municipios)
								 ->with('municipios',$municipios[0]->municipio)
                                 ->with('demasmunicipios',$demasmunicipios);
                                 
        
    }
    public function update($id_cliente, ClientesRequestCreate $request )
    {   
        $cliente = clientes::find($id_cliente);
        $cliente->fill($request->all());
        $cliente->save();

    Session::flash('message','Cliente editado correctamente');      
    return  Redirect::to('/cliente');
    }
   public function destroy($id_cliente)
    {
        clientes::find($id_cliente)
        ->delete();
      
        Session::flash('message','Cliente eliminado correctamente');
        return Redirect::to('/cliente');
    }
}
