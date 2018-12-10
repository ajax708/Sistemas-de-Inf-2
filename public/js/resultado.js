a = 0;
function addCampo(nombre){
    a++;
    var div = document.createElement('div');
    
        
        div.innerHTML = '<div class="form-group"><label for="valor_'+a+'">'+nombre+'</label><input type="text" class="form-control" id="valor_'+a+'" name="valor_'+a+'" aria-describedby="valor" placeholder="Instrodusca Valor"></div>';
        document.getElementById('resultado').appendChild(div);
        
    
}
function eliminar() {
    document.getElementById('resultado').innerHTML='';
    a=0;
}
$(document).ready(function (e) {
    $('#ResultadoModal').on('show.bs.modal', function(e) {    
       var analisis = $(e.relatedTarget).data().analisis;
        //$(e.currentTarget).find('#parametro').val(parametro);
        console.log(analisis);
        $.ajax({
            url: 'analisis/'+analisis
        }).done(function(parametros){
            var jParametros = JSON.parse(parametros);
            eliminar();//Limpia el Formulario
            jParametros.forEach(function(param,index){
                console.log(param);
                addCampo(param['nombre']);
            });
        }); 
    });
    
});
