<?php 

require_once __DIR__ . '/../includes/app.php';


use MVC\Router;
use Controllers\AdministradorController;
use Controllers\LoginController;

$router = new Router();


$router->get('/Administradores', [AdministradorController::class, 'index']);
$router->get('/Administradores/crear', [AdministradorController::class, 'crear']);
$router->post('/Administradores/crear', [AdministradorController::class, 'crear']);
$router->get('/Administradores/actualizar', [AdministradorController::class, 'actualizar']);
$router->post('/Administradores/actualizar', [AdministradorController::class, 'actualizar']);
$router->post('/Administradores/eliminar', [AdministradorController::class, 'eliminar']);

$router->get('/login', [LoginController::class, 'login']);
$router->post('/login', [LoginController::class, 'login']);
$router->get('/logout', [LoginController::class, 'logout']);


// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();