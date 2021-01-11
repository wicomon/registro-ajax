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

$statement2 = $conexion->prepare('SELECT COUNT(*) FROM usuarios WHERE rol = :rol');
$statement2->execute(array(':rol'=>'alumno'));
$total_registrados = $statement2->fetchColumn();


// echo $total_registrados;


include_once 'includes/header.php'; 
include_once 'views/index.view.php';
include_once 'includes/footer.php'; 

?>