
const form = document.getElementById('formulario-registro');
const nombre = document.getElementById('nombre');
const apellido = document.getElementById('apellido');
const dni = document.getElementById('dni');
const telefono = document.getElementById('telefono');
const email = document.getElementById('email');

if (document.getElementById('formulario-registro')) {
    

form.addEventListener('submit', function(e){
    e.preventDefault();

    infoUsuario = new FormData();
    infoUsuario.append('nombre', nombre.value.trim());
    infoUsuario.append('apellido', apellido.value.trim());
    infoUsuario.append('dni', dni.value.trim());
    infoUsuario.append('telefono', telefono.value.trim());
    infoUsuario.append('email', email.value.trim());

    // console.log(...infoUsuario);



    //enviar los datos para su creacion via AJAX
    crearUsuario(infoUsuario);
    
});


function checkEmail(datos){
    var emailSinVerificar = email.value.trim();
    
    // crear el objeto
    const xhr = new XMLHttpRequest();

    // abrir la conexion
    xhr.open('GET', `verificar-email.php?email=${emailSinVerificar}`, true);

    // pasar los datos
    xhr.onload = function() {
        if(this.status === 200) {
            const resultadoEmail = JSON.parse(xhr.responseText) ;
            console.log(resultadoEmail);
        }
    }

    // enviar los datos
    xhr.send(datos);

}

function crearUsuario(datos) {
    // crear el objeto
    const xhr = new XMLHttpRequest();

    // abrir la conexion
    xhr.open('POST', 'registrar-usuario.php', true);

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
                setTimeout(() => {
                    window.location.href= 'principal.php'
                }, 2000);
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

}