<?php

namespace App\Http\Controllers;

use App\Paciente;
use App\User;
use App\Persona;
use Carbon\Carbon;
use App\Http\Requests\PacienteStoreRequest;
use Illuminate\Http\Request;

class PacienteController extends Controller
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
        $pacientes= Paciente::orderBy('id','ASC')->paginate();
        return view('paciente.index',compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paciente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PacienteStoreRequest $request)
    {
        $name= $request->input("nombre")." ".$request->input("apellido");
        $request->merge(['name' => $name]);
        $usuario=User::create($request->all());
        
        if($usuario->save())
        {
            //recuperamos la llave del USUARIO y la mezclamos en el request
            $request->merge(['user_id' => $usuario->id]);
            
            $persona= Persona::create($request->all());
            $request->merge(['id' => $persona->id]);
            $request->merge(['cod_paciente' => $persona->id]);
            $date = Carbon::now();
            $request->merge(['ultima_solicitud' => $date]);

            $paciente= Paciente::create($request->all());

            return redirect()->route('paciente.index',$paciente->id)
            ->with('info','Paciente registrado con exito');
        } 
        else
        {
            return view("mensajes.mensaje_error")->with("msj","...Hubo un error al agregar ;...") ;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paciente= Paciente::find($id);
        return view('paciente.show',compact('paciente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paciente= Paciente::find($id);
        
        return view('paciente.edit',compact('paciente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $medico= Paciente::find($id);
        $persona= Persona::find($id);
        $user= User::find($persona->user_id);
        //Validar
        $user->fill($request->all())->save();
        $persona->fill($request->all())->save();
        
        $request->merge(['id' => $persona->id]);
        $paciente->fill($request->all())->save();
        

        return redirect()->route('paciente.index',$paciente->id)
                ->with('info','Ficha actualizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paciente $paciente)
    {
        Paciente::find($id)->delete();
        return back()->with('info', 'Eliminado correctamente');
    }
}
