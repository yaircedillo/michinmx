<?php

namespace michinmx\Http\Controllers;

use Illuminate\Http\Request;
use michinmx\Http\Requests;

use michinmx\Http\Requests\PesonalesRequestCreate;
use michinmx\personales;
use Session;
use Storage;
use michinmx\puestos;
use michinmx\municipios;
use Redirect;



class personalcontroller extends Controller
{
    public function index()
    {
        
        $personales = personales::all();
        return view("personal.index")->with('personales',$personales);
     
    }
    
    public function create()
    {
        $puestos = puestos::all();
        $municipios = municipios::all();
        return view("personal.create",compact('puestos','municipios'));
        
    }
    
    public function store( PesonalesRequestCreate $request)
    {
        
        $archivo         = $request->file('img');

        if($archivo != '' || $archivo != null ){

        $nombre_original = $request->file('img')->getClientOriginalName();
        $extension       = $request->file('img')->getClientOriginalExtension();
        $r1              = Storage::disk('archivos')->put($nombre_original, \File::get($archivo));
        $ruta            = public_path('archivos') . "/" . $nombre_original;

        personales::create([
            'id_personales' => $request['id_personales'],
            'nombre' => $request['nombre'],  
            'ap_pat' => $request['ap_pat'],  
            'ap_mat' => $request['ap_mat'],  
            'genero' => $request['genero'],  
            'calle' => $request['calle'],  
            'colonia' => $request['colonia'],  
            'cp' => $request['cp'],  
            'correo' => $request['correo'],  
            'telefono' => $request['telefono'],  
            'archivo'=> $nombre_original , 
                
            'id_municipios' => $request['id_municipios'],  
            'id_puesto' => $request['id_puesto'], 

            ]);
            
            Session::flash('message','Personal registrado exitosamente');
            return  Redirect::to('/personal');

         
        }else{
            usuario::create([
                'name' => $request['name'],
                'email'=> $request['email'],
                'password'=> base64_encode($request['password']),
                'archivo'=> 'sinfoto.jpg'
            ]);
                 Session::flash('message','Usuario creado exitosamente sin foto');
         return  Redirect::to('/personal'); // esta linea solo redireccionara un mensaje de realizado corrctamente
            }
        }
   public function show($id_personal)
   {
       
   }
    public function edit($id_personal)
    {
        $personal = personales::find($id_personal);
        return view('personal.edit', ['personal'=>$personal]);
    }
    public function update($id_personal, Request $request )
    {
        $archivo         = $request->file('img');
        if($archivo != '' || $archivo != null ){
        $nombre_original = $request->file('img')->getClientOriginalName();
        $extension       = $request->file('img')->getClientOriginalExtension();
        $r1              = Storage::disk('archivos')->put($nombre_original, \File::get($archivo));
        $ruta            = public_path('archivos') . "/" . $nombre_original;

        $personales = personales::find($id);
        $personales->name = $request->name;
        $personales->ap_pat = $request->ap_pat;
        $personales->ap_mat = $request->ap_mat;
        $personales->genero = $request->genero;
        $personales->calle = $request->calle;
        $personales->colonia = $request->colonia;
        $personales->cp = $request->cp;
        $personales->correo = $request->correo;
        $personales->telefono = $request->telefono;
        $personales->id_municipios = $request->id_municipios;
        $personales->id_puesto = $request->id_puesto;
        $personales->archivo = $nombre_original;
        $personales->save();
        Session::flash('message','Usuario modificado exitosamente');
     return  Redirect::to('/personal'); // esta linea solo redireccionara un mensaje de realizado corrctamente
    }else{

        $personales = personales::find($id);
        $personales->name = $request->name;
        $personales->ap_pat = $request->ap_pat;
        $personales->ap_mat = $request->ap_mat;
        $personales->genero = $request->genero;
        $personales->calle = $request->calle;
        $personales->colonia = $request->colonia;
        $personales->cp = $request->cp;
        $personales->correo = $request->correo;
        $personales->telefono = $request->telefono;
        $personales->id_municipios = $request->id_municipios;
        $personales->id_puesto = $request->id_puesto;
        $personales->archivo = 'sinfoto.jpg';
        $personales->save();
        Session::flash('message','Usuario modificado exitosamente sin foto');
     return  Redirect::to('/personal'); // esta linea solo redireccionara un mensaje de realizado corrctamente
    }

    }

   public function destroy($id_personal)
    {
        personales::destroy($id_personal);
      
        Session::flash('message','Personal eliminado correctamente');
        return Redirect::to('/personal');
    }
}
