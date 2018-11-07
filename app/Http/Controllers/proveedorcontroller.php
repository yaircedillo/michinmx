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
        
        $proveedores = proveedores::withTrashed()
        ->get();
        return view("proveedor.index")
        ->with('proveedores',$proveedores);
     
    }
    
    public function create()
    {
        $municipios = municipios::all();
        $proveedores = proveedores::withTrashed();
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
    proveedores::withTrashed()
    ->where('id_proveedores',$id_proveedores)
    ->restore();
    Session::flash('message','Proveedor  restaurado correctamente');
    return Redirect::to('/proveedor');
   }
    public function edit($id_proveedores)
    {
        $municipios = municipios::all();
        $proveedor = proveedores::find($id_proveedores);
        return view('proveedor.edit', ['proveedor'=>$proveedor,'municipios'=>$municipios]);
    }
    public function update($id_proveedores, Request $request )
    {   
        $proveedor = proveedores::find($id_proveedores);
        $proveedor->fill($request->all());
        $proveedor->save();


        Session::flash('message','Personal editado correctamente');
        return  Redirect::to('/proveedor');
    }
   public function destroy($id_proveedores)
    {
        proveedores::find($id_proveedores)
        ->delete();
        Session::flash('message','Proveedor eliminado correctamente');
        return Redirect::to('/proveedor');
    }
}
