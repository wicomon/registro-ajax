<?php 
session_start();
session_destroy();
$_SESSION = array();




include_once 'includes/header.php';
include_once 'views/principal.view.php';
include_once 'includes/footer.php';
?>
