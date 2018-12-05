<?php

namespace App\Http\Controllers;

use App\Persona;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\PersonaStoreRequest;
use App\Http\Requests\PersonaUpdateRequest;

class PersonaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $personas= Persona::orderBy('id','ASC')->whereIn('tipo',array('01','02'))->paginate();
        return view('persona.index',compact('personas'));
    }

    public function create()
    {
        return view('persona.create');
    }

     /**
     * Para la creacion de este objeto, tenemos una precondicion:
     *  Debe estar previamente creada una instancia de User, ya que este objeto depende de el para existir.
     * @return \Illuminate\Http\Response
     */
    public function store(PersonaStoreRequest $request)
    {

        $usuario=new User;
        $usuario->name=strtoupper( $request->input("nombre")." ".$request->input("apellido") ) ;
        $usuario->email=$request->input("email");
        $usuario->password= bcrypt( $request->input("password") );
        
        if($usuario->save())
        {

            //recuperamos la llave del USUARIO y la mezclamos en el request
            $request->merge(['user_id' => $usuario->id]);
            
            $persona= Persona::create($request->all());
            
            return redirect()->route('persona.edit',$persona->id)
            ->with('info','Personal Medico registrado con exito');
        } 
        else
        {
            return view("mensajes.mensaje_error")->with("msj","...Hubo un error al agregar ;...") ;
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $persona= Persona::find($id);

        return view('persona.show',compact('persona'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $persona= Persona::find($id);
        
        return view('persona.edit',compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $persona= Persona::find($id);
        //Validar

        $persona->fill($request->all())->save();

        return redirect()->route('persona.edit',$persona->id)
                ->with('info','Ficha actualizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Persona::find($id)->delete();
        return back()->with('info', 'Eliminado correctamente');
    }
}
