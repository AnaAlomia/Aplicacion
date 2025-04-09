$(document).ready(function() {
    listCiudad();
});
var listCiudad = function() {
    var table = $('#dt_ciudad').DataTable({      
          destroy: true,
          responsive: true,
          searching: true,
          orderable: false,
          lengthChange: false,
          pageLength: 15,
          autoWidth: true,          
        "ajax": {
            "url": "ajax.php?module=Ciudad&controller=Ciudad&function=data",

            "method": "post"
        },
        "deferRender": true,
       
        "columns": [
            { "data": "id" },
            { "data": "nombre" },
            { "data": "departamento" },                  
            { "data": "habitantes" }
        ]
    });    
}
