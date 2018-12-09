$(document).ready( function () {
    $('#myTable').DataTable({
    	  "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
            }
    });
    // $('.mydatepicker').datepicker({
    //   autoclose: true,
    //   startDate: 'now',
    //   format: 'dd-mm-yyyy'
    // });
    $('.select2').select2();
    $('.select2').on('select2:select select2:unselect', function (e) {
    	var data = e.params.data;
    	var items = $(this).select2('data');
    	console.log(items);
	});
});