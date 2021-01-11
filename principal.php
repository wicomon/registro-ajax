<?php session_start();
if (!isset($_SESSION['usuario'])) {
	header('Location: index.php');
}
include_once 'includes/funciones.php';
$conexion = conexion();
$usuario = usuario_logeado($conexion, $_SESSION['usuario']);


if ($usuario['rol']== 'admin') {
	header('Location: admin/index.php');
}




include_once 'includes/header.php';
include_once 'views/principal.view.php';
include_once 'includes/footer.php';
?>
