
<section class="content">



<div class="col-md-12" >


  <div class="box box-primary box-gris">
 
      <div class="box-header with-border my-box-header">
        <h3 class="box-title"><strong>Editar Informacion del Analisis</strong></h3>
      </div><!-- /.box-header -->
      <hr style="border-color:white;" />
      <div id="notificacion_E2" ></div>
      <div class="box-body">
              
          
          <form   action="{{ url('editar_analisis') }}"  method="post" id="f_editar_analisis"  class="formentrada"  >
          
          
          
            
            @csrf
          <input type="hidden" name="id_analisis" value="{{ $analisis->id }}"> 

          <div class="col-md-8">
              <div class="form-group">
                    <label class="col-sm-2" for="nombre">Clave*</label>
                      <div class="col-sm-10" >
                        <input type="text" class="form-control" id="clave" name="clave"  required  value="{{ $analisis->clave }}">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2" for="nombre">Nombre*</label>
                      <div class="col-sm-10" >
                        <input type="text" class="form-control" id="nombre" name="nombre"  required  value="{{ $analisis->nombre }}" >
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2" for="rol">Area*</label>
                    <div class="col-sm-10" >
                      <select id="area" name="area" class="form-control" required>
                         @foreach($areas as $area)
                            @if($area->id == $analisis->id)
                              <option value="{{ $analisis->area->id }}" selected>{{ $analisis->area->nombre }}</option> 
                            @else     
                              <option value="{{ $area->id }}">{{ $area->nombre }}</option>
                            @endif
                         @endforeach
                      </select>
                    </div>  
                  </div>     


          </div>

          <div class="box-footer col-xs-12 box-gris ">
                <button type="submit" class="btn btn-primary">Actualizar Datos</button>
          </div>

          </form>
                    
      </div>
                    
    </div>
  </div>                     
</div>
</section>