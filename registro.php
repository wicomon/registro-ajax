<?php session_start();
require_once 'includes/funciones.php';
$conexion = conexion();
if (isset($_SESSION['usuario'])) {
    header('Location: principal.php');
}
$total_usuarios = total_usuarios($conexion);

if ($total_usuarios) {
	header('Location: finalizada.php');
}






include_once 'includes/header.php';
include_once 'views/registro.view.php';
include_once 'includes/footer.php';
?>