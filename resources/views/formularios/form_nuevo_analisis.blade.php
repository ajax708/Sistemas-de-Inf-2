
<section class="content" >

 <div class="col-md-12">

  <div class="box box-primary  box-gris">
 
    <div class="box-header with-border my-box-header">
      <h3 class="box-title"><strong>Nuevo Analisis</strong></h3>
    </div><!-- /.box-header -->
      <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
      <hr style="border-color:white;" />
 
    <div class="box-body">      
      <form   action="{{ url('Analisis') }}"  method="post" id="f_crear_analisis" class="formentrada" >
				<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 

          <div class="col-md-8 ">
                   
                  <div class="form-group">
                    <label class="col-sm-2" for="nombre">Clave*</label>
                      <div class="col-sm-10" >
                        <input type="text" class="form-control" id="clave" name="clave"  required   >
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2" for="nombre">Nombre*</label>
                      <div class="col-sm-10" >
                        <input type="text" class="form-control" id="nombre" name="nombre"  required   >
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2" for="rol">Area*</label>
                    <div class="col-sm-10" >
                      <select id="area" name="area" class="form-control" required>
                         @foreach($areas as $area)
                         <option value="{{ $area->id }}">{{ $area->nombre }}</option>
                         @endforeach
                      </select>
                    </div>  
                  </div>          
                 
              <div class="box-footer col-xs-12 box-gris ">
                <button type="submit" class="btn btn-primary">Crear Nuevo Analisis</button>
              </div>
      </form>
</section>

