<!--Cualitativo Modal -->
     <div id="cualitativoModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Agregar Cualitativo</h4>
                </div>
                <div class="modal-body">
                    
                    <form action="{{ route('cualitativoanalisis.store') }}" method="POST" class="form-inline" role="form">
                      @csrf
                      <div class="form-group">
                        <input type="hidden" id='parametro' name="parametro" value="">
                      </div>
                      <div class="form-group">
                        <label for="valor">Valor: </label>
                        <input type="text" class="form-control" id="valor" name="valor" placeholder="Valor" required="true">
                      </div>
                      <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<!--cuantitativo Modal -->
     <div id="cuantitativoModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Agregar Cuantitativo</h4>
                </div>
                <div class="modal-body">
                  
                       <form action="{{ route('cuantitativoanalisis.store') }}" method="POST" class="form" role="form">
                      @csrf
                      <div class="form-group">
                        <input type="hidden" id='parametro' name="parametros_analisis_id" value="">
                      </div>
                      <div class="form-group">
                        <label for="rango_inicial">Desde: </label>
                        <input type="number" class="form-control" id="rango_inicial" name="rango_inicial" required="true" >
                      </div>
                      <div class="form-group">
                        <label for="rango_final">Hasta: </label>
                        <input type="number" class="form-control" id="rango_final" name="rango_final" required="true" >
                      </div>
                      <div class="form-group">
                        <label for="descripcion">Descripcion: </label>
                        <textarea class="form-control" id="descripcion" name="descripcion" required ></textarea> 
                      </div>
                      <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--cuantitativo edit -->
     <div id="cuantitativoEdit" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Editar Cuantitativo</h4>
                </div>
                <div class="modal-body">
                  
                       <form action="" method="POST" class="form" role="form">
                      @csrf
                      @method('PUT')
                      <div class="form-group">
                        <input type="hidden" id='parametro' name="parametros_analisis_id" value="">
                      </div>
                      <div class="form-group">
                        <label for="rango_inicial">Desde: </label>
                        <input type="number" class="form-control" id="rango_inicial" name="rango_inicial" required="true" >
                      </div>
                      <div class="form-group">
                        <label for="rango_final">Hasta: </label>
                        <input type="number" class="form-control" id="rango_final" name="rango_final" required="true" >
                      </div>
                      <div class="form-group">
                        <label for="descripcion">Descripcion: </label>
                        <textarea class="form-control" id="descripcion" name="descripcion" required ></textarea> 
                      </div>
                      <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

  {{-- Edit Modal --}}
   <div id="editModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Editar Parametro</h4>
                </div>
                <div class="modal-body">
                       <form id="editForm" action="" method="POST" class="form" role="form">
                      @csrf
                      @method('PUT')
                      <input type="hidden" name="analisis" id="analisis" value="">

                      <div class="form-group">
                        <label for="nombre">Nombre: </label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required="true" >
                      </div>
                      <div class="form-group">
                        <label for="cant_resultados"># Resultado: </label>
                        <input type="number" class="form-control" id="cant_resultados" name="cant_resultados" required="true">
                      </div>
                      <div class="form-group ">
                        {!! Form::select('tipo', ['01'=>'01','02'=>'02','03'=>'03'], '01', ['id'=>'tipo','placeholder' => 'Tipo', 'class'=>'form-control', 'required'=>'true']) !!}
                      </div>
                      <div class="form-group ">
                        {!! Form::select('unidad_medida_id', $unidades->pluck('nombre','id'), $unidades->first()->id,['id'=>'unidad_medida_id','placeholder' => 'Unidad', 'class'=>'form-control', 'required'=>'true']) !!}
            
                      </div>
                      <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>