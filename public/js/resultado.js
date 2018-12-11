
function addCampo(id,nombre){
    
    var div = document.createElement('div');
    
        
        div.innerHTML = '<div class="form-group"><label for="valor_'+id+'">'+nombre+'</label><br><input type="text" class="form-control" id="valor_'+id+'" name="valor_'+id+'" aria-describedby="valor" placeholder="Instroduzca Valor" required="true" >=><input type="text" class="form-control input-lg" id="observacion_'+id+'" name="observacion_'+id+'" aria-describedby="valor" placeholder="Instroduzca Observacion" required="true" ><input id="parametro_id_'+id+'"  name="parametro_id_'+id+'" type="hidden" value="'+ id +'" ></div>';
        document.getElementById('resultado').appendChild(div);
        
    
}
function eliminar() {
    document.getElementById('resultado').innerHTML='';
    a=0;
}
$(document).ready(function (e) {
    $('#ResultadoModal').on('show.bs.modal', function(e) {    
       var analisis = $(e.relatedTarget).data().analisis;
       var ordenId = $(e.relatedTarget).data().orden;
        //$(e.currentTarget).find('#parametro').val(parametro);
        console.log(analisis);
        console.log(ordenId);
        $.ajax({
            type: "GET",
            url: '/resultado/analisis/'+analisis,
        }).done(function(parametros){
            console.log(parametros);
            var jParametros = JSON.parse(parametros);
            eliminar();//Limpia el Formulario
            jParametros.forEach(function(param,index){
                console.log(param);
                addCampo(param['id'],param['nombre']);
            });
            var div = document.createElement('div');
            div.innerHTML = '<input type="hidden" id="analisis" name="analisis" value="'+ analisis +'">';
            document.getElementById('resultado').appendChild(div);
        }); 
    });
    
});
