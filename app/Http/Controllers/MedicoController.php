<?php

namespace App\Http\Controllers;

use App\Medico;
use App\Persona;
use APP\User;


use Illuminate\Http\Request;
use App\Http\Requests\MedicoStoreRequest;

class MedicoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicos= Medico::orderBy('id','ASC')->paginate();
        return view('medico.index',compact('medicos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medico.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MedicoStoreRequest $request)
    {
        $name= $request->input("nombre")." ".$request->input("apellido");
        
        $usuario=User::create(
            [
                'name'=>$name,
                'email'=>$request->input("email"),
                'password'=>bcrypt($request->input("password"))
            ]
        );
        
        if($usuario->save())
        {
            //recuperamos la llave del USUARIO y la mezclamos en el request
            $request->merge(['user_id' => $usuario->id]);
            
            $persona= Persona::create($request->all());
            $request->merge(['id' => $persona->id]);

            $medico= Medico::create($request->all());

            return redirect()->route('medico.index',$medico->id)
            ->with('info','Medico registrado con exito');
        } 
        else
        {
            return view("mensajes.mensaje_error")->with("msj","...Hubo un error al agregar ;...") ;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medico= Medico::find($id);
        return view('medico.show',compact('medico'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medico= Medico::find($id);
        
        return view('medico.edit',compact('medico'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $medico= Medico::find($id);
        $persona= Persona::find($id);
        $user= User::find($persona->user_id);
        //Validar
        $user->name=$request->input("name");
        $user->email=$request->input("email");
        $user->password= bcrypt( $request->input("password") ); 
        

        $persona->fill($request->all())->save();
        
        $request->merge(['id' => $persona->id]);
        $medico->fill($request->all())->save();
        

        return redirect()->route('medico.index',$medico->id)
                ->with('info','Ficha actualizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Medico::find($id)->delete();
        $persona=Persona::find($id);
        $persona->delete();
        User::find($persona->user_id)->delete();
        return back()->with('info', 'Eliminado correctamente');
    }
}
