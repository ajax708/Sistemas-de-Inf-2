@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Bienvenido a SysLab</h1>
@stop

@section('content')
<!-- Small boxes (Stat box) -->
@php
$pendientes = App\Orden::where('estado','En Proceso')->count();
$completo = App\Orden::where('estado','Completo')->count();
@endphp
<div class="row">
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-aqua">
      <div class="inner">
         
        <h3>{{$pendientes}}</h3>

        <p>Ordenes pendientes</p>
      </div>
      <div class="icon">
        <i class="fas fa-clock"></i>
      </div>
      <a href="#" class="small-box-footer">Ver ordenes <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-green">
      <div class="inner">
        <h3>{{$completo}}</h3>

        <p>Ordenes Completas a entregar</p>
      </div>
      <div class="icon">
        <i class="fas fa-check-double"></i>
      </div>
      <a href="#" class="small-box-footer">Ver<i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  
  <!-- ./col -->
</div>

@stop