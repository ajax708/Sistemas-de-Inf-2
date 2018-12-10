<?php

namespace App\Http\Controllers;

use App\Empleado;
use App\Persona;
use App\User;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
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
        $empleados= Empleado::orderBy('id','ASC')->paginate();
        return view('empleado.index',compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
            $request->merge(['cod_empleado'=>$persona->id]);
            $empleado= Empleado::create($request->all());

            return redirect()->route('empleado.index',$empleado->id)
            ->with('info','Empleado registrado con exito');
        } 
        else
        {
            return view("mensajes.mensaje_error")->with("msj","...Hubo un error al agregar ;...") ;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empleado= Empleado::find($id);
        return view('empleado.show',compact('empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleado= Empleado::find($id);
        
        return view('empleado.edit',compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $empleado= Empleado::find($id);
        $persona= Persona::find($id);
        $user= User::find($persona->user_id);
        //Validar
        $user->name=$request->input("name");
        $user->email=$request->input("email");
        $user->password= bcrypt( $request->input("password") ); 
        

        $persona->fill($request->all())->save();
        
        $request->merge(['id' => $persona->id]);
        $empleado->fill($request->all())->save();
        

        return redirect()->route('empleado.index',$empleado->id)
                ->with('info','Ficha actualizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Empleado::find($id)->delete();
        $persona=Persona::find($id);
        $persona->delete();
        User::find($persona->user_id)->delete();
        return back()->with('info', 'Eliminado correctamente');
    }
}
