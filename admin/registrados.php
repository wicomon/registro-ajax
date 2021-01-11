<?php 
session_start();
include_once '../includes/funciones.php';

if (!isset($_SESSION['usuario'])) {
	header('Location: ../registro.php');
}

$conexion = conexion();
$usuario = usuario_logeado($conexion, $_SESSION['usuario']);

if (($usuario['rol'] !== 'admin')) {
	header('Location: ../index.php');
}


$statement = $conexion->prepare('SELECT * FROM usuarios WHERE rol = :rol');
$statement->execute(array(':rol'=>'alumno'));
$alumnos = $statement->fetchAll();

// echo json_encode($alumnos);

include_once 'includes/header.php'; 
include_once 'views/registrados.view.php';
include_once 'includes/footer.php'; 

?>