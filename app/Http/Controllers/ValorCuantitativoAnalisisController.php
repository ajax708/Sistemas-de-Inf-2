<?php

namespace App\Http\Controllers;

use App\ValorCuantitativoAnalisis;
use Illuminate\Http\Request;

class ValorCuantitativoAnalisisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $cuantitativo = ValorCuantitativoAnalisis::create($request->only('rango_inicial','rango_final','descripcion','parametros_analisis_id'));

        return redirect()->route('paranalisis.index',['analisis' => $cuantitativo->parametro->analisis->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ValorCuantitativoAnalisis  $valorCuantitativoAnalisis
     * @return \Illuminate\Http\Response
     */
    public function show(ValorCuantitativoAnalisis $valorCuantitativoAnalisis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ValorCuantitativoAnalisis  $valorCuantitativoAnalisis
     * @return \Illuminate\Http\Response
     */
    public function edit(ValorCuantitativoAnalisis $valorCuantitativoAnalisis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ValorCuantitativoAnalisis  $valorCuantitativoAnalisis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ValorCuantitativoAnalisis $cuantitativo)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ValorCuantitativoAnalisis  $valorCuantitativoAnalisis
     * @return \Illuminate\Http\Response
     */
    public function destroy(ValorCuantitativoAnalisis $valorCuantitativoAnalisis)
    {
        //
    }
}
