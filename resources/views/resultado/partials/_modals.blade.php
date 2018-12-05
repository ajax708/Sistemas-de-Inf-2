{{-- TABLA DE PARAMETROS --}} 
  <div id="TablaParametrosModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Agregar Cualitativo</h4>
                </div>
                <div class="modal-body">
                    
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="box box-primary">
                        <div class="box-header bg-info with-border">
                          
                          <h3 class="box-title pull-left">Listado Analisis</h3>
                      
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                          <table class="table table-striped table-hover">
                            <thead>
                              <tr>
                                <th>Parametro</th>
                                
                                <th>Valor Cualitativo</th>
                                
                                <th>Valor Cuantitativo</th>

                                <th colspan="3">&nbsp;</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach($parametros as $parametro)
                              
                                <tr  role="row" class="odd" >
                          
                                <td >{{ $parametro->id }}</td>

                                <td>{{ $parametro->nombre }}</td>  

                                <td>
                                  <input type="hidden" id='resultado' name="resultado" value="">
                                </td>

                                <td>
                                  <div class="input-group margin">
                                    <div class="input-group-btn">
                                      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action
                                      <span class="fa fa-caret-down"></span></button>
                                      <ul class="dropdown-menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                      </ul>
                                    </div>
                                  <!-- /btn-group -->
                                    <input type="text" class="form-control">
                                  </div>
                                </td>

                                <td>
                                <div class="col-sm-4" >         
                                <button type="button" class="btn btn-xs btn-primary" onclick="guardar_parametro({{ $resultado->id }});" >Guardar</button>    
                              </div>
                                
                                <i class="fas fa-pencil-alt"></i> 
                                </button>
                                </td>

                            </tr>
                            
                          @endforeach
                            </tbody>
                          </table>
                          {{$analisis->render()}}
                        </div>
                        <!-- /.box-body -->
                      </div>
                      <!-- /.box -->
                    </div>
                  </div>

                </div>
            </div>
        </div>
  </div>
      
