<?php session_start();
require_once 'includes/funciones.php';
if (isset($_SESSION['usuario'])) {
	header('Location: principal.php');
}
$conexion = conexion();




$errores=0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$email = filter_var(strtolower($_POST['email']), FILTER_SANITIZE_STRING);
	$dni = $_POST['dni'];

	$statement = $conexion->prepare('SELECT *FROM usuarios WHERE email=:email AND dni=:dni');
	$statement->execute(array(':email'=>$email, ':dni'=>$dni));
	$resultado = $statement->fetch();

	
	if ($resultado !== false) {
		$_SESSION['usuario'] = $resultado['id'];
		header('Location: index.php');
	}else{
		$errores = 1;
	}

}
require_once 'includes/header.php';
require 'views/login.view.php'; 
require_once 'includes/footer.php';
?>