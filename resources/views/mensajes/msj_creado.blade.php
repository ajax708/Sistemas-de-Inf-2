

<div class="box box-primary col-xs-12">


<div class='aprobado' style="margin-top:70px; text-align: center">
  <span class="label label-success"><?php  echo $clase; ?> Creado<i class="fa fa-check"></i></span><br/>
<label style='color:#177F6B'>
              <?php  echo $msj; ?> 
</label> 

</div>

 <div class="margin" style="margin-top:50px; text-align:center;margin-bottom: 50px;">
             
             <div class="btn-group">
                 <a href="#"  onclick="cargar_formularios ('/Analisis/create');" class="btn btn-success"    value=" "  > Crear <?php  echo $clase; ?></a>
                   
             </div>

              <div class="btn-group" style="margin-left:50px; " >
                     
                 <a href="{{ url('Analisis') }}" class="btn btn-info"    value=" "  > Listado <?php  echo $clase; ?> </a>
             </div>
       

 </div> 

 </div> 

