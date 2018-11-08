$(document).ready(function (e) {
  $('#cualitativoModal').on('show.bs.modal', function(e) {    
     var parametro = $(e.relatedTarget).data().parametro;
      $(e.currentTarget).find('#parametro').val(parametro);
  });
  $('#cuantitativoModal').on('show.bs.modal', function(e) {    
     var parametro = $(e.relatedTarget).data().parametro;
      $(e.currentTarget).find('#parametro').val(parametro);
  });
  $('#editModal').on('show.bs.modal', function(e) {    
     var parametro = $(e.relatedTarget).data().parametro;
      $(e.currentTarget).find('#parametro').val(parametro);
  });
  
});
