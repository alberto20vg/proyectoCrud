
function agregarDatosForm(datos) {
    d = datos.split(',');

    $('#idMueble').val(d[0]);
    $('#nombreEditar').val(d[1]);
    $('#materialEditar').val(d[2]);
    $('#precioEditar').val(d[3]);
    $('#cantidadEditar').val(d[4]);
}

function preguntarSiNo() {

}

function eliminarDatos(id) {

    cadena = "id=" + id;
    $.ajax({
        type: "POST",
        url: "eliminar.php",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                
                $('#tabla').load('tabla.php'); 
            }else{

            }
        }
        
    });
    $('#tabla').load('tabla.php'); 
}