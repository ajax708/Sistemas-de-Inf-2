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
                        <input type="hidden" id='parametro' name="parametro" value="">
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
                        <textarea class="form-control" id="descripcion" name="descripcion" ></textarea> 
                      </div>
                      <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                   
                    
                   
                </div>
            </div>
        </div>
    </div>

    