<?php

namespace michinmx\Http\Controllers;

use Illuminate\Http\Request;
use michinmx\Http\Requests;
use michinmx\Http\Requests\actualizarPersonal;
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
        $sesionid = Session::get('sesionid');
       
       
        if ( $sesionid=="")
        {
         Session::flash('error', 'Es necesario iniciar sesion antes de continuar');
         return redirect()->route('iniciar_secion');
        }
        
        else
        {

        $personales = personales:: withTrashed()
        ->get();
        return view("personal.index")->with('personales',$personales);
     
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

        $puestos = puestos::withTrashed()->get();
        $municipios = municipios::all();
        return view("personal.create",compact('puestos','municipios'));
        
    }
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
            personales::create([
                'nombre' => $request['nombre'],  
                'ap_pat' => $request['ap_pat'],  
                'ap_mat' => $request['ap_mat'],  
                'genero' => $request['genero'],  
                'calle' => $request['calle'],  
                'colonia' => $request['colonia'],  
                'cp' => $request['cp'],  
                'correo' => $request['correo'],  
                'telefono' => $request['telefono'],
             
                'archivo'=> 'sinfoto.jpg',
                'id_municipios' => $request['id_municipios'],  
                'id_puesto' => $request['id_puesto'], 
            ]);
                 Session::flash('message','Personal creado exitosamente sin foto');
         return  Redirect::to('/personal'); // esta linea solo redireccionara un mensaje de realizado corrctamente
            }
        }
   public function show($id_personal)
   {
    personales::withTrashed()
    ->where('id_personal',$id_personal)
    ->restore();
    Session::flash('message','Personal restaurado correctamente');
    return Redirect::to('/personal');
   }


    public function edit($id_personal)
    {
        $sesionid = Session::get('sesionid');
       
       
        if ( $sesionid=="")
        {
         Session::flash('error', 'Es necesario iniciar sesion antes de continuar');
         return redirect()->route('iniciar_secion');
        }
        
        else
        {

        $personal = personales::where('id_personal','=',$id_personal)
        ->get();
      
        $id_municipios = $personal[0]->id_municipios;
        $id_puesto = $personal[0]->id_puesto;
		
		$puestos = puestos::where('id_puesto','=',$id_puesto)
        ->get();
        $municipios = municipios::where('id_municipios','=',$id_municipios)
		->get();
		$demasmunicipios = municipios::where('id_municipios','!=',$id_municipios)
        ->get();
        $demaspuesto = puestos::where('id_puesto','!=',$id_puesto)
	    ->get();
		
        return view('personal.edit')
        ->with('personal',$personal[0])
        ->with('id_municipios',$id_municipios)
        ->with('id_puesto',$id_puesto)
        ->with('puestos',$puestos[0]->puesto)
        ->with('municipios',$municipios[0]->municipio)
        ->with('demaspuesto',$demaspuesto)
        ->with('demasmunicipios',$demasmunicipios);
  
        
    }
}
    public function update($id_personal, actualizarPersonal $request )
    {
        $archivo         = $request->file('img');
        if($archivo != '' || $archivo != null ){
        $nombre_original = $request->file('img')->getClientOriginalName();
        $extension       = $request->file('img')->getClientOriginalExtension();
        $r1              = Storage::disk('archivos')->put($nombre_original, \File::get($archivo));
        $ruta            = public_path('archivos') . "/" . $nombre_original;

        $personales = personales::find($id_personal);
        $personales->nombre = $request->nombre;
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
        Session::flash('message','Personal modificado exitosamente');
     return  Redirect::to('/personal'); // esta linea solo redireccionara un mensaje de realizado corrctamente
    }else{

        $personales = personales::find($id_personal);
        $personales->nombre = $request->nombre;
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
        if($archivo!='')
			{
			$personales->img = $nombre_original;
			}
			$personales->save();
        Session::flash('message','Empleado modificado exitosamente sin foto');
     return  Redirect::to('/personal'); // esta linea solo redireccionara un mensaje de realizado correctamente
    }

    }

   public function destroy($id_personal)
    {
        personales::find($id_personal)
        ->delete();
      
        Session::flash('message','Personal eliminado correctamente');
        return Redirect::to('/personal');
    }
}
