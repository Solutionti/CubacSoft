$(document).ready(function (){

  $("#table-gastos").DataTable({
    "lengthMenu": [10, 50, 100, 200],
    "language":{
      "processing": "Procesando",
      "search": "Buscar:",
      "lengthMenu": "Ver _MENU_  Pagos",
      "info": "Mirando _START_ a _END_ de _TOTAL_ Pagos",
      "zeroRecords": "No encontraron resultados",
      "paginate": {
        "first":      "Primera",
        "last":       "Ultima",
        "next":       "Siguiente",
        "previous":   "Anterior"
      }
    }
  });
});

$("#guardar_postulado").on("click", function(){
  var files = document.getElementById("foto").files;
  var formdata = new FormData();
  var tppostulacion = $("#tppostulacion").val(),
  nombre = $("#nombre").val(),
  apellido = $("#apellido").val(),
  tarjeton = $("#tarjeton").val(),
  cargo = $("#cargo").val(),
  color = $("#color").val(),
  tpdocumento = $("#tpdocumento").val(),
  documento = $("#documento").val(),
  foto = $("#tppostulacion").val(),
  responsable = $("#responsable").val();
  formdata.append("tppostulacion", tppostulacion);
  formdata.append("nombre", nombre);
  formdata.append("apellido", apellido);
  formdata.append("tarjeton", tarjeton);
  formdata.append("cargo", cargo);
  formdata.append("color", color);
  formdata.append("tpdocumento", tpdocumento);
  formdata.append("documento", documento);
  formdata.append("foto", foto);
  formdata.append("responsable", responsable);

  for (var i = 0; i < files.length; i++) {
    var file = files[i];
    //agregue los archivos al objeto formData para la carga de datos
    formdata.append('imagen[]', file, file.name);
  }

  $.ajax({
    url: url,
    method: "POST",
    data: formdata,
    processData: false,
    contentType: false,
    success: function(){
      $("body").overhang({
        type: "success",
        message: "El postulado se  ha creado correctamente"
      });
      setTimeout(reloadPage, 2000);
    }
  });
});

const reloadPage = () => {
  location.reload();
}