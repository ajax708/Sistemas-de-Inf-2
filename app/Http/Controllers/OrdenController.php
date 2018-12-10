<?php

namespace App\Http\Controllers;

use App\Orden;
use App\DetalleOrden;
use Illuminate\Http\Request;

class OrdenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $ordenes = Orden::all();
        return view('orden.index',['ordenes'=>$ordenes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('orden.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->only('nro_orden','fecha_ingreso','fecha_egreso','paciente_id','medico_id','empleado_id'));
        $orden = Orden::create($request->only('nro_orden','fecha_ingreso','fecha_egreso','paciente_id','medico_id','empleado_id'));
        $analisis = $request->input('analisis');
        foreach ($analisis as $value) {
            DetalleOrden::create([
                'orden_id' => $orden->id,
                'analisis_id' => $value,
                'estado' => '01'
            ]);
        }
        return redirect()->route('orden.index')->with(['ordenes'=>Orden::all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function show(Orden $orden)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function edit(Orden $orden)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orden $orden)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orden $orden)
    {
        //
    }
}
