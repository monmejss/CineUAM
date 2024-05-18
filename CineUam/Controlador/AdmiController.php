<?php

namespace Controllers;

use MVC\Router;
use Model\adminir;

class adminirController {

    public static function index(Router $router) {
        $administrador = adminir::all();

        // Muestra mensaje condicional
        $resultado = $_GET['resultado'] ?? null;

        $router->render('administrador/index', [
            'administrador' => $administrador,
            'resultado' => $resultado
        ]);
    }

    public static function crear(Router $router) {
        $errores = adminir::getErrores();
        $adminir = new adminir;

        // Ejecutar el código después de que el usuario envia el formulario
        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            /** Crea una nueva instancia */
            $adminir = new adminir($_POST['adminir']);

            // Validar
            $errores = $adminir->validar();


            if(empty($errores)) {

                // Guarda en la base de datos
                $resultado = $adminir->guardar();

                if($resultado) {
                    header('location: /administrador');
                }
            }
        }

        $router->render('administrador/crear', [
            'errores' => $errores,
            'adminir' => $adminir
        ]);
    }

    public static function actualizar(Router $router) {
        $id = validarORedireccionar('/admin');

        // Obtener los datos de la propiedad
        $adminir = adminir::find($id);

        // Arreglo con mensajes de errores
        $errores = adminir::getErrores();

        
        if($_SERVER['REQUEST_METHOD'] === 'POST') {

                // Asignar los atributos
                $args = $_POST['adminir'];
                $adminir->sincronizar($args);

                // Validación
                $errores = $adminir->validar();
                
                if(empty($errores)) {

                    // Guarda en la base de datos
                    $resultado = $adminir->guardar();

                    if($resultado) {
                        header('location: /admin');
                    }
                }
        }

        $router->render('administrador/actualizar', [
            'adminir' => $adminir,
            'errores' => $errores
        ]);
    }

    public static function eliminar(Router $router) {

    }
}