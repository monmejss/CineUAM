<?php
// Incluye los archivos necesarios
include("Controlador/CCartelera.php");

// Crear una instancia del controlador de funciones
$funcionController = new FuncionController();
$funciones = $funcionController->obtenerFunciones();

// Incluye la vista de la cartelera
include("Vista/index.php");
?>