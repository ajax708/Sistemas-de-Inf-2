<?php

namespace App\Http\Controllers;

use App\Resultado;
use App\Orden;
use Illuminate\Http\Request;
use App\Analisis;
use PDF;


class ResultadoController extends Controller
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
    public function index($orden)
    {

        $orden=Orden::find($orden);
        $analisisx=$orden->analisis;
        return view('resultado.index',compact('analisisx'));   

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Resultado  $resultado
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $ordenes = Orden::where('estado','Completo')->get();
        return view('resultado.show')->with(['ordenes'=>$ordenes]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Resultado  $resultado
     * @return \Illuminate\Http\Response
     */
    public function edit(Resultado $resultado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Resultado  $resultado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resultado $resultado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Resultado  $resultado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resultado $resultado)
    {
        //
    }

    public function getParametros($id){
        $analisis=Analisis::find($id);
        $parametros=$analisis->parametros;
        return json_encode($parametros);


    public function pdf(Orden $orden){
        
        $pdf = PDF::loadView('resultado.pdf', ['orden'=>$orden]);
        $resultado = Resultado::where('orden_id',$orden->id)->where('parametros_analisis_id',2)->get()->first();
        // dd($resultado->valor);
        return $pdf->stream('resultado.pdf');

    }
}
