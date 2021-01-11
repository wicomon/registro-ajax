
function eliminarAlumno(id) {
         // console.log(id);
         // preguntar al usuario
        //  const respuesta = confirm('¿Estás Seguro (a) ?');
         swal.fire({
            title: 'Estas seguro?',
            text: "Esta acción no se puede revertir!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si! Eliminar',
            cancelButtonText: 'Cancelar'
        }).then(function (resultado) {
            if (resultado.isConfirmed) {
                
                // llamado a ajax
                // crear el objeto
                const xhr = new XMLHttpRequest();
  
                // abrir la conexión
                xhr.open('GET', `modelo-alumno.php?id=${id}&accion=borrar`, true);
  
                // leer la respuesta
                xhr.onload = function() {
                     if(this.status === 200) {
                          const resultado = JSON.parse(xhr.responseText);
                       
                          if(resultado.respuesta == 'exito') {
                              Swal.fire(
                                  'Completado !!!',
                                  'Se Elimino el usuario',
                                  'success'
                              )
                              setTimeout(() => {
                                  window.location.href= 'registrados.php'
                              }, 1000);
                          }else{
                              Swal.fire(
                                  'error !!!',
                                  'No se pudo crear el usuario, Verifique los datos registrados',
                                  'error'
                              )
                          }
  
                     }
                }
  
                // enviar la petición
                xhr.send();
            }
        });
    
}

if (document.querySelector('#crear-alumno')) {
    const form = document.getElementById('crear-alumno');
    const nombre = document.getElementById('nombre');
    const apellido = document.getElementById('apellido');
    const dni = document.getElementById('dni');
    const telefono = document.getElementById('telefono');
    const email = document.getElementById('email');

    form.addEventListener('submit', function(e){
        e.preventDefault();
    
        infoUsuario = new FormData();
        infoUsuario.append('nombre', nombre.value.trim());
        infoUsuario.append('apellido', apellido.value.trim());
        infoUsuario.append('dni', dni.value.trim());
        infoUsuario.append('telefono', telefono.value.trim());
        infoUsuario.append('email', email.value.trim());

        

        //enviar los datos para su creacion via AJAX
        crearUsuario(infoUsuario);
    });
    
}

function crearUsuario(datos) {
    // crear el objeto
    const xhr = new XMLHttpRequest();

    // abrir la conexion
    xhr.open('POST', 'modelo-alumno.php', true);

    // pasar los datos
    xhr.onload = function() {
        if(this.status === 200) {
            var resultado = JSON.parse(xhr.responseText) ;
            console.log(resultado);
            if(resultado.registro === 'exito'){
                Swal.fire(
                    'Correcto !!!',
                    'Se creo el usuario',
                    'success'
                )
            }else{
                Swal.fire(
                    'error !!!',
                    'No se pudo crear el usuario, Verifique los datos registrados',
                    'error'
                )
                if (resultado.dni == 'error') {
                    dni.className = 'form-control is-invalid';
                }
                if (resultado.email == 'error') {
                    email.className = 'form-control is-invalid';
                }

            }
        }
    }

    // enviar los datos
    xhr.send(datos);
}