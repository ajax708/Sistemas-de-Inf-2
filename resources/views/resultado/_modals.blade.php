
<!--Resultados Modal -->
<div id="ResultadoModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">×</button>
              <h4 class="modal-title">Agregar Resultado</h4>
          </div>
          <div class="modal-body">
              
              <form action="{{ route('resultado.store') }}" method="POST" class="form-inline" role="form" autocomplete="off">
                @csrf
                
                <input type="hidden" id="orden" name="orden" value="{{ $ordenId}}">
                
                            <div id="resultado">
                                
                            </div>
                      
                <button type="submit" class="btn btn-primary">Guardar</button>
              </form>

          </div>
      </div>
  </div>
</div>

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