<?php

namespace michinmx\Http\Controllers;

use Illuminate\Http\Request;
use michinmx\Http\Requests;
use michinmx\Http\Requests\ProveedorRequestCreate;
use michinmx\proveedores;
use Session;
use michinmx\municipios;
use Redirect;


class proveedorcontroller extends Controller
{
    public function index()
    {
        
        $proveedores = proveedores::all();
        return view("proveedor.index",compact('proveedores'));
     
    }
    
    public function create()
    {
        $municipios = municipios::all();
        $proveedores = proveedores::all();
        return view("proveedor.create",compact('proveedores','municipios'));
        
    }
    
    public function store( ProveedorRequestCreate $request)
    {
        proveedores::create([
            'id_proveedores' => $request['id_proveedores'],
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

            Session::flash('message','Proveedor  registrado exitosamente');
            return  Redirect::to('/proveedor');
    }
   public function show($id_proveedores)
   {
       
   }
    public function edit($id_proveedores)
    {
        $municipios = municipios::find($id_municipios);
        $proveedor = proveedores::find($id_proveedores);
        return view('proveedor.edit', ['proveedor'=>$proveedor,'municipios'=>$municipios]);
    }
    public function update($id_proveedores, Request $request )
    {   
        $proveedor = proveedores::find($id_proveedores);
        $proveedor->fill($request->all());
        $proveedor->save();


        Session::flash('message','Estado editado correctamente');
        return  Redirect::to('/proveedor');
    }
   public function destroy($id_proveedores)
    {
        proveedores::destroy($id_proveedores);
      
        Session::flash('message','Proveedor eliminado correctamente');
        return Redirect::to('/proveedor');
    }
}
