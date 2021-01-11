<?php
include_once 'includes/funciones.php';


$email = limpiarDatos($_GET['email']);

$conexion = conexion();

    
$statement = $conexion->prepare('SELECT COUNT(*) FROM usuarios WHERE email = :email');
$usuario_registrado = $statement->execute(array(':email'=>$email));
// $usuario_registrado = $statement->execute(array(':nombres'=>'luis',':apellidos'=>'cordova' , ':dni'=>'12345678', ':telefono'=>'999999999', ':email'=>'luis@gmail.com'));


    if ($statement->fetchColumn() > 0) {
        $respuesta['email'] ='error';
    }else{
        $respuesta['email'] ='exito';
    }
    $conexion = null;
    $statement = null;
           
    die(json_encode($respuesta));




?>