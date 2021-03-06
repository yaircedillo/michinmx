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
    public function restaura($id_carta)

	{
       

    }
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
   
        $cartas = cartas::withTrashed()
        ->get();
        return view('carta.index')
        ->with('cartas',$cartas);

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

        $tipos = tipo_cartas::withTrashed()->get();
        $cartas = cartas::withTrashed();
        $personales = personales::withTrashed()->get();
        return view("carta.create",compact('cartas','personales','tipos'));
    }
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
    cartas::withTrashed()
    ->where('id_carta',$id_carta)
    ->restore();
    Session::flash('message','Carta restaurada correctamente');
    return Redirect::to('/carta');
   }
    public function edit($id_carta)
    {
        $sesionid = Session::get('sesionid');
       
       
        if ( $sesionid=="")
        {
         Session::flash('error', 'Es necesario iniciar sesion antes de continuar');
         return redirect()->route('iniciar_secion');
        }
        
        else
        {

        $cartas = cartas::where('id_carta','=',$id_carta)
        ->get();
      
        $id_tipo_c = $cartas[0]->id_tipo_c;
        $id_personal = $cartas[0]->id_personal;
		
		$tipos = tipo_cartas::where('id_tipo_c','=',$id_tipo_c)
        ->get();
        $personales = personales::where('id_personal','=',$id_personal)
		->get();
		$demastipos = tipo_cartas::where('id_tipo_c','!=',$id_tipo_c)
        ->get();
        $demaspersonales = personales::where('id_personal','!=',$id_personal)
	    ->get();
		
        return view('carta.edit')
        ->with('cartas',$cartas[0])
        ->with('id_tipo_c',$id_tipo_c)
        ->with('id_personal',$id_personal)
        ->with('personales',$personales[0]->nombre)
        ->with('tipos',$tipos[0]->nombre)
        ->with('demastipos',$demastipos)
        ->with('demaspersonales',$demaspersonales);

      
       $cartas = cartas::find($id_carta);//el $ cartas es la variable el segundo cartes es la referencia al modelo es como decir $cartas = a select * from cartas where id == al id que recibes :: esto que es es como el termino es decir lo que esta antes es select  * from cartas y lo que esta despues :: son las condiciones 
         $personales = personales::withTrashed()->get();
         $tipos = tipo_cartas::withTrashed()->get();
        return view('carta.edit')->with('cartas',$cartas)->with('personales',$personales)->with('tipos',$tipos);
    }
}
    public function update($id_carta, CartaRequestCreate $request )
    {   
        $cartas = cartas::find($id_carta);
        $cartas->fill($request->all());
        $cartas->save();
        Session::flash('message','Carta modificado exitosamente');
        return  Redirect::to('/carta');
    }
   public function destroy($id_carta)
    {
        cartas::find($id_carta)
        ->delete();
             
        Session::flash('message','Carta eliminada correctamente');
        return Redirect::to('/carta');
    }

   
    
}
