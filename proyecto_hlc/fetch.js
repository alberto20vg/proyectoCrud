var formulario = document.getElementById('formularioAgregar');
var respuesta = document.getElementById('respuesta');

formulario.addEventListener('submit', function(e) {
  e.preventDefault(e);
  var datos = new FormData(formulario);

  fetch('grabar.php', {
    method: 'POST',
    body: datos,
    
  })
    .then((res) => res.json())
    .then((datos) => {
      if (datos === 'error'){
        respuesta.innerHTML = `<b>Rellena todos los campos</b>`
      } else {
        respuesta.innerHTML = `<b>${datos}</b>`
      }
      
    })
    $('#tabla').load('tabla.php');
    $('#tabla').load('tabla.php');
});



var formularioEditar = document.getElementById('formularioEditar');
var respuestaEditar = document.getElementById('respuesta');

formularioEditar.addEventListener('submit', function(ee) {
  ee.preventDefault(ee);
  var datosEditar = new FormData(formularioEditar);

  fetch('editar.php', {
    method: 'POST',
    body: datosEditar,
    
  })
    .then((resEditar) => resEditar.json())
    .then((datosEditar) => {
      if (datosEditar === 'error'){
        respuestaEditar.innerHTML = `<b>Rellena todos los campos</b>`
      } else {
        respuestaEditar.innerHTML = `<b>${datosEditar}</b>`
        $('#tabla').load('tabla.php');
      }
      
    })
    $('#tabla').load('tabla.php');
    $('#tabla').load('tabla.php');
});
