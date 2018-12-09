<?php

namespace App\Http\Controllers;

use App\DetalleOrden;
use App\Orden;
use Illuminate\Http\Request;

class DetalleOrdenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Orden $orden)
    {
        return view('detalleorden.index',['orden'=> $orden]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DetalleOrden  $detalleOrden
     * @return \Illuminate\Http\Response
     */
    public function show(DetalleOrden $detalleOrden)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DetalleOrden  $detalleOrden
     * @return \Illuminate\Http\Response
     */
    public function edit(DetalleOrden $detalleOrden)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DetalleOrden  $detalleOrden
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetalleOrden $detalleOrden)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DetalleOrden  $detalleOrden
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetalleOrden $detalleOrden)
    {
        //
    }
}
