<?php 
// La base de datos para los usuarios se llama usuarios
function conectarDB() : mysqli {
    $db = new mysqli('localhost', 'root', '123456', 'usuarios');

    if(!$db) {
        echo "Error no se pudo conectar";
        exit;
    } 

    return $db;
    
}