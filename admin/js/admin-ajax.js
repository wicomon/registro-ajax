$(document).ready(function(){
    $('#crear-admin').on('submit', function(e) {
        e.preventDefault();
        var datos = $(this).serializeArray();

        $.ajax({
            type: $(this).attr('method'),
            data: datos,
            url: $(this).attr('action'),
            dataType: 'json',
            success: function(data){
                var resultado = data;
                console.log(data);
                if(resultado.respuesta === 'exito'){
                    Swal.fire(
                        'Correcto !!!',
                        'Se creo el usuario',
                        'success'
                    )
                }else{
                    Swal.fire(
                        'error !!!',
                        'No se pudo crear el usuario',
                        'error'
                    )
                }
            }
        });
    });

    $('#editar-admin').on('submit', function(e) {
        
        e.preventDefault();
        var datos = $(this).serializeArray();
        $.ajax({
            type: $(this).attr('method'),
            data: datos,
            url: $(this).attr('action'),
            dataType: 'json',
            success: function(data){
                var resultado = data;
                console.log(data);
                if(resultado.respuesta === 'exito'){
                    Swal.fire(
                        'Correcto !!!',
                        'Se creo el usuario',
                        'success'
                    )
                }else{
                    Swal.fire(
                        'error !!!',
                        'No se pudo crear el usuario',
                        'error'
                    )
                }
            }
        });
    });

    $('#login-admin').on('submit', function(e) {
        e.preventDefault();
        var datos = $(this).serializeArray();

        $.ajax({
            type: $(this).attr('method'),
            data: datos,
            url: $(this).attr('action'),
            dataType: 'json',
            success: function(data){
                console.log(data);
                var resultado = data;
                if(resultado.respuesta === 'exitoso'){
                    Swal.fire(
                        'Login correcto !!!',
                        'Bienvenido '+resultado.usuario +' !!!',
                        'success'
                    )
                    setTimeout(() => {
                        window.location.href= 'admin-area.php'
                    }, 2000);
                }else{
                    Swal.fire(
                        'error !!!',
                        'No se pudo iniciar sesión',
                        'error'
                    )
                }
            }
        });
    });
});