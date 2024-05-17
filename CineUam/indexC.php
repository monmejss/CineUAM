<?php
include_once("Controlador/ControladorCartelera.php");
include_once("Vista/cartelera.php");

$controller = new ControladorCartelera();
$funciones = $controller->getFunciones();

mostrarCartelera($funciones);
?>
