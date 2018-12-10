
<!--Resultados Modal -->
<div id="ResultadoModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">×</button>
              <h4 class="modal-title">Agregar Resultado</h4>
          </div>
          <div class="modal-body">
              
              <form action="{{ route('resultado.store') }}" method="POST" class="form-inline" role="form">
                @csrf
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-body" id="resultado">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
              </form>

          </div>
      </div>
  </div>
</div>

{{-- @foreach ($analisis->parametros as $parametro)  
                  <div class="form-group">
                    <label for="resultado[]">{{ $parametro->nombre }} </label>
                    <input type="text" class="form-control" id="resultado[]" name="resultado" placeholder="Resultado" required="true">
                  </div>
                @endforeach --}}