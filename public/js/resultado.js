$(document).ready(function (e) {

  $('#TablaParametrosModal').on('show.bs.modal', function(e) {  
      var action = $(e.relatedTarget).data().action;
      console.log(action);
      var ggg = $(e.currentTarget).find("#editForm").attr('action', action);
      console.log(ggg);

      var analisis = $(e.relatedTarget).data().analisis;
      $(e.currentTarget).find('#analisis').val(analisis);

      var nombre = $(e.relatedTarget).data().nombre;
      $(e.currentTarget).find('#nombre').val(nombre);

      var res = $(e.relatedTarget).data().res;
      $(e.currentTarget).find('#cant_resultados').val(res);

      var tipo = $(e.relatedTarget).data().tipo;
      $(e.currentTarget).find('#tipo').val(tipo);

      var uni = $(e.relatedTarget).data().uni;
      $(e.currentTarget).find('#unidad_medida_id').val(uni);
  });
  
});
