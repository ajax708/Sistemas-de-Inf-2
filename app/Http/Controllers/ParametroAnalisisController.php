<?php

namespace App\Http\Controllers;

use App\ParametroAnalisis;
use App\Analisis;
use App\UnidadMedida;
use App\Libraries\Herramientas;
use Illuminate\Http\Request;

class ParametroAnalisisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Analisis $analisis)
    {
        $parametros = ParametroAnalisis::where('analisis_id',$analisis->id)->get();
        $unidades = UnidadMedida::all();
        //$enums = Herramientas::getEnumValues('parametros_analisis','tipo') ;
         return view("parametroanalisis.index")->with(["parametros" => $parametros, "analisis"=>$analisis,"unidades" =>$unidades]);
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
       // Analisis $analisis = $request->analisis_id;
        $parametro = ParametroAnalisis::create($request->only('nombre','tipo','cant_resultados','unidad_medida_id','analisis_id'));
        return redirect()->route('parametroanalisis.index',['analisis'=>$request->analisis_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ParametroAnalisis  $parametroAnalisis
     * @return \Illuminate\Http\Response
     */
    public function show(ParametroAnalisis $parametroAnalisis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ParametroAnalisis  $parametroAnalisis
     * @return \Illuminate\Http\Response
     */
    public function edit(ParametroAnalisis $parametroAnalisis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ParametroAnalisis  $parametroAnalisis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ParametroAnalisis $parametroAnalisis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ParametroAnalisis  $parametroAnalisis
     * @return \Illuminate\Http\Response
     */
    public function destroy(ParametroAnalisis $parametroAnalisis)
    {
        //
    }
}
