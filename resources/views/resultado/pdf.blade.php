<!DOCTYPE html>
<head>
	<style type="text/css">
		.tg  {border-collapse:collapse;border-spacing:0;border-color:#aabcfe;}
		.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-top-width:1px;border-bottom-width:1px;border-color:#aabcfe;color:#669;background-color:#e8edff;}
		.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-top-width:1px;border-bottom-width:1px;border-color:#aabcfe;color:#039;background-color:#b9c9fe;}
		.tg .tg-baqh{text-align:center;vertical-align:top}
		.tg .tg-lqy6{text-align:right;vertical-align:top}
		.tg .tg-0lax{text-align:left;vertical-align:top}
		</style>
</head>

<body>
	<p></p>
	<p style="text-align: right;"><span style="color: #808080;"><i class="fas fa-circle"></i> SYSLAB <i class="fas fa-circle"></i> 2018 <i class="fas fa-circle"></i> SISTEMAS DE INFORMACION II <i class="fas fa"></i> FICCT</span></p>
	<h2 align="center" style="color: #4485b8;"><strong>REPORTE DE RESULTADO</strong></h2>
	<table style="height: 48px; width: 755px;">
		<tbody>
		<tr>
		<td style="width: 304px;"><strong>PACIENTE: </strong>{{$orden->paciente->persona->nombre}} {{$orden->paciente->persona->apellido}}</td>
		<td style="width: 225px;"><strong>CI: </strong>{{$orden->paciente->persona->ci}}</td>
		<td style="width: 204px;"><strong>GENERO:</strong> @if ($orden->paciente->persona->genero == '01')
			Masculino
		@else
			Femenino
		@endif</td>
		</tr>
		<tr>
		<td style="width: 304px;"><strong>MEDICO: </strong>{{$orden->medico->persona->nombre}} {{$orden->medico->persona->apellido}}</td>
		<td style="width: 225px;"><strong>NRO ORDEN:</strong> {{$orden->nro_orden}}</td>
		<td style="width: 204px;"><strong>FECHA: </strong>{{$orden->fecha_egreso}}</td>
		</tr>
		</tbody>
		</table>
	
	@foreach ($orden->analisis as $analisis)
	<h3 style="text-align: left; color: #4485b8;"><strong>{{$analisis->nombre}} - {{$analisis->clave}}</strong></h3>
	<table class="tg" style="undefined;table-layout: fixed; width: 100%">
		<colgroup>
		<col style="width: 20%">
		<col style="width: 15%">
		<col style="width: 20%">
		<col style="width: 20px">
		<col style="width: 35%">
		</colgroup>
		  <tr>
			<th class="tg-1wig">Parámetro</th>
			<th class="tg-1wig">Valor</th>
			<th class="tg-1wig">Referenciales</th>
			<th class="tg-1wig">Unidad</th>
			<th class="tg-1wig">Observaciones</th>
		  </tr>
		  @foreach ($analisis->parametros as $param)
		  @php
			  $resultado = App\Resultado::where('orden_id',$orden->id)->where('parametros_analisis_id',$param->id)->get()->first();		  
		  @endphp
		  <tr>
			<td style="font-weight:bold" class="tg-0lax" >{{$param->nombre}}</td>
			<td class="tg-0lax">@if (!empty($resultado))
				{{$resultado->valor}}
			@endif</td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax">{{$param->unidadDeMedida->simbolo}}</td>
			<td class="tg-0lax">@if (!empty($resultado))
				{{$resultado->observaciones}}
			@endif</td>
		  </tr>
		  @endforeach
	</table>
	@endforeach
</body>
</html>