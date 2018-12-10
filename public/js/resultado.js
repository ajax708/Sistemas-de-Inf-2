a = 0;
function addCampo(ordenId,id,nombre){
    a++;
    var div = document.createElement('div');
    
        
        div.innerHTML = '<div class="form-group"><input id="parametro_id_'+id+' "type="hidden" value="'+ id +'"><input id="orden_id"type="hidden" value="'+ ordenId +'"></input><label for="valor_'+id+'">'+nombre+'</label><input type="text" class="form-control" id="valor_'+id+'" name="valor_'+id+'" aria-describedby="valor" placeholder="Instrodusca Valor"></div>';
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
            url: 'analisis/'+analisis
        }).done(function(parametros,ordenId){
            var jParametros = JSON.parse(parametros);
            eliminar();//Limpia el Formulario
            jParametros.forEach(function(param,index){
                console.log(param);
                addCampo(ordenId,param['id'],param['nombre']);
            });
        }); 
    });
    
});
