@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Resultados de analisis</h1>
@stop

@section('content')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
        <div class="box box-solid box-success">
            <div class="box-header">
                <h3 class="box-title">Ordenes completas</h3>
            </div>
            <div class="box-body">
                     <table id="myTable" class="table table-condensed table-hover ">
                         <thead>
                             <tr>
                                 <th>Nro. Orden</th>
                                 <th>Paciente</th>
                                 <th>Medico</th>
                                 <th>Ingreso</th>
                                 <th>Egreso</th>
                                 <th>Analisis</th>
                                <th>Opciones</th>
                             </tr>
                         </thead>
                         <tbody>
                             @foreach ($ordenes as $orden)
                                 <tr>
                                     <td>{{ $orden->nro_orden }}</td>
                                     <td>{{ $orden->paciente->persona->nombre}}</td>
                                     <td>{{ $orden->medico->persona->apellido }}</td>
                                     <td>{{ $orden->fecha_ingreso }}</td>
                                     <td>{{ $orden->fecha_egreso }}</td>
                                     <td>
                                         @foreach ($orden->analisis as $analisis)
                                             {{$analisis->clave}}, 
                                         @endforeach
                                     </td>
                                    <td>
                            
                                        <a href="{{ route('resultado.pdf',['orden' => $orden->id]) }}" target="_blank">
                                                <button type="button" class="btn btn-warning btn-sm">
                                                    <i class="fas fa-print"></i> Ver Resultados - 
                                                    PDF</button>
                                        </a>
                                    </td>
                                 </tr>
                              @endforeach
                         </tbody>
                     </table>
            </div>
        </div>
    </div>
</div>
@stop 
@section('js')
<script src="{{ asset('js/orden.js') }}"></script>
@stop