<?php

namespace michinmx\Http\Controllers;

use Illuminate\Http\Request;
use michinmx\Http\Requests\Usuariovalidacion;
use michinmx\Http\Requests\actualizarUsuario;//llama a la validacion del request
use michinmx\usuario; //esto es el modelo 
use Session; //para usar flash
use Redirect;//para redirigir
use Storage;


use michinmx\Http\Requests;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

        // realizaremos una consulta con el Controller
        $usuarios = usuario::withTrashed()
        ->get();
        return view('usuario.index')
        ->with('usuarios',$usuarios);
        // esto solo retonara la vista que haremos con los datos que consultamos
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

        return view('usuario.create');
        // esto retonara la vista del alta.
    }
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Usuariovalidacion $request)
    {   //cambiamos el request por usuariovalidacion
        // esta funcion recibira y guardara los datos en la base  

        $archivo         = $request->file('img');

        if($archivo != '' || $archivo != null ){

        $nombre_original = $request->file('img')->getClientOriginalName();
        $extension       = $request->file('img')->getClientOriginalExtension();
        $r1              = Storage::disk('archivos')->put($nombre_original, \File::get($archivo));
        $ruta            = public_path('archivos') . "/" . $nombre_original;



        usuario::create([
            'name' => $request['name'],
            'email'=> $request['email'],
            'password'=> $request['password'],
            'tipo'=> $request['tipo'],
            'user'=> $request['user'],
            'archivo'=> $nombre_original
        ]);
             Session::flash('message','Usuario creado exitosamente');
     return  Redirect::to('/usuarios'); // esta linea solo redireccionara un mensaje de realizado corrctamente
        // dump($request);
        // esto es para ver que llega aqui si llegan las variables ahora solo las guardaremos
        }else{
        usuario::create([
            'name' => $request['name'],
            'email'=> $request['email'],
            'password'=> $request['password'],
            'tipo'=> $request['tipo'],
            'user'=> $request['user'],
            'archivo'=> 'sinfoto.jpg'
        ]);
             Session::flash('message','Usuario creado exitosamente sin foto');
     return  Redirect::to('/usuarios'); // esta linea solo redireccionara un mensaje de realizado corrctamente
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        usuario::withTrashed()
    ->where('id',$id)
    ->restore();
    Session::flash('message','Usuario restaurado correctamente');
    return Redirect::to('/usuarios');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sesionid = Session::get('sesionid');
       
       
        if ( $sesionid=="")
        {
         Session::flash('error', 'Es necesario iniciar sesion antes de continuar');
         return redirect()->route('iniciar_secion');
        }
        
        else
        {

        $usuarios = usuario::find($id);
        return view('usuario.edit')->with('usuarios',$usuarios);
    }
    }
   
    public function update(actualizarUsuario $request, $id)
    {

        $archivo         = $request->file('img');
        if($archivo != '' || $archivo != null ){
        $nombre_original = $request->file('img')->getClientOriginalName();
        $extension       = $request->file('img')->getClientOriginalExtension();
        $r1              = Storage::disk('archivos')->put($nombre_original, \File::get($archivo));
        $ruta            = public_path('archivos') . "/" . $nombre_original;

        $usuarios = usuario::find($id);
        $usuarios->name = $request->name;
        $usuarios->email = $request->email;
        $usuarios->password = $request->password;
        $usuarios->tipo = $request->tipo;
        $usuarios->user = $request->user;
        $usuarios->archivo = $nombre_original;
        $usuarios->save();
        Session::flash('message','Usuario modificado exitosamente');
     return  Redirect::to('/usuarios'); // esta linea solo redireccionara un mensaje de realizado corrctamente
    }else{
         $usuarios = usuario::find($id);
        $usuarios->name = $request->name;
        $usuarios->email = $request->email;
        $usuarios->password = $request->password;
        $usuarios->tipo = $request->tipo;
        $usuarios->user = $request->user;
        if($archivo!='')
			{
			$usuarios->img = $nombre_original;
			}
			$usuarios->save();
        Session::flash('message','Usuario modificado exitosamente sin foto');
     return  Redirect::to('/usuarios'); // esta linea solo redireccionara un mensaje de realizado corrctamente
    }

    }

   
    public function destroy($id)
    {
      usuario::find($id)
      ->delete();
      
      Session::flash('message','Usuario eliminado correctamente');
      return Redirect::to('/usuarios');
    }
}
