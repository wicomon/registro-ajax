<?php
require_once('../includes/funciones.php');

if (isset($_GET['accion'])) {
    
    if($_GET['accion'] == 'borrar') {
        
        $conexion = conexion();
        $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

        $statement = $conexion->prepare('DELETE FROM usuarios WHERE id = :id ');
        $statement->execute(array(':id'=>$id));
        $usuario_eliminado = $statement->rowCount();
        $id_insertado = $conexion->lastInsertId();


        if ($usuario_eliminado) {
            $respuesta['respuesta'] ='exito';
        }else{
            $respuesta['respuesta'] ='error';
        }
        $conexion = null;
        $statement = null;

    

           
        die(json_encode($respuesta));
    }
}

if (isset($_POST['nombre'])) {
    $nombres = limpiarDatos($_POST['nombre']);
    $apellidos = limpiarDatos($_POST['apellido']);
    $dni = limpiarDatos($_POST['dni']);
    $telefono = limpiarDatos($_POST['telefono']);
    $email = limpiarDatos($_POST['email']);
    
    $conexion = conexion();
    
    $statement1 = $conexion->prepare('SELECT COUNT(*) FROM usuarios WHERE email = :email');
    $email_registrado = $statement1->execute(array(':email'=>$email));
    
    
    
        if ($statement1->fetchColumn() > 0) {
            $respuesta['email'] ='error';
            $emailVerificacion = 1;
        }else{
            $respuesta['email'] ='exito';
            $emailVerificacion = 0;
        }
        $statement1 = null;
    
        $statement2 = $conexion->prepare('SELECT COUNT(*) FROM usuarios WHERE dni = :dni');
        $dni_registrado = $statement2->execute(array(':dni'=>$dni));
        
            if ($statement2->fetchColumn() > 0) {
                $respuesta['dni'] ='error';
                $dniVerificacion = 1;
            }else{
                $respuesta['dni'] ='exito';
                $dniVerificacion = 0;
            }
            $statement2 = null;
    
    if ($emailVerificacion == 0 && $dniVerificacion == 0) {
        $statement = $conexion->prepare('INSERT INTO usuarios (nombres, apellidos, dni, telefono,email)  
                                    VALUES (:nombres, :apellidos, :dni, :telefono, :email)');
        $usuario_registrado = $statement->execute(array(':nombres'=>$nombres,':apellidos'=>$apellidos , ':dni'=>$dni, ':telefono'=>$telefono, ':email'=>$email));
        // $usuario_registrado = $statement->execute(array(':nombres'=>'luis',':apellidos'=>'cordova' , ':dni'=>'12345678', ':telefono'=>'999999999', ':email'=>'luis@gmail.com'));
    
        $id_insertado = $conexion->lastInsertId();
    
    
        if ($usuario_registrado) {
            $respuesta['registro'] ='exito';
        }else{
            $respuesta['registro'] ='error';
        }
        $conexion = null;
        $statement = null;
    
    }else{
        $respuesta['registro'] ='error';
    }
    
    
               
        die(json_encode($respuesta));

    
}    





?>