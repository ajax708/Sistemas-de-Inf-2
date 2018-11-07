<?php

namespace App\Http\Controllers;

use App\Analisis;
use App\Area;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Http\Request\analisisStoreRequest;
use App\Http\Request\analisisUpdateRequest;

class AnalisisController extends Controller
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
        
        $analisis= Analisis::orderBy('id','DESC')->paginate();
        return view('analisis.index',compact('analisis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('analisis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(analisisStoreRequest $request)
    {
        //Validar

         $analisis= Analisis::create($request->all());
         return redirect()->route('analisis.edit',$analisis->id)
                ->with('info','Analisis creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Analisis  $analisis
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $analisis= Analisis::find($id);
        return view('analisis.show',compact('analisis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Analisis  $analisis
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $analisis= Analisis::find($id);
        return view('analisis.edit',compact('analisis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Analisis  $analisis
     * @return \Illuminate\Http\Response
     */
    public function update(analisisUpdateRequest $request, $id)
    {
        $analisis= Analisis::find($id);
        //Validar

        $analisis->fill($request->all())->save();

        return redirect()->route('analisis.edit',$analisis->id)
                ->with('info','Analisis actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Analisis  $analisis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Analisis::find($id)->delete();
        return view('analisis.index');
    }
}