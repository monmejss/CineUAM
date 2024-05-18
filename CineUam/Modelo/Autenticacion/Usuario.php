<?php

namespace Model;

class Usuario extends ActiveRecord {

    protected static $tabla = 'usuarios';
    protected static $columnasDB = ['id', 'correo', 'contrasena'];

    public $id;
    public $nombre;
    public $apellidos;
    public $correo;
    public $contrasena;

    
  
    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->correo = $args['correo'] ?? '';
        $this->contrasena = $args['contrasena'] ?? '';
    }

    public function validar() {
        if(!$this->correo) {
            self::$errores[] = "El correo del usuario es obligatorio";
        }
        if(!$this->contrasena) {
            self::$errores[] = "El contrasena del usuario es obligatorio";
        }
        return self::$errores;
    }

    public function existeUsuario() {
        // Revisar si el usuario existe.
        $query = "SELECT * FROM " . self::$tabla . " WHERE correo = '" . $this->correo . "' LIMIT 1";
        $resultado = self::$db->query($query);

        if(!$resultado->num_rows) {
            self::$errores[] = 'El Usuario No Existe';
            return;
        }

        return $resultado;
    }

    public function comprobarPassword($resultado) {
        $usuario = $resultado->fetch_object();

        $this->autenticado = password_verify( $this->contrasena, $usuario->contrasena );

        if(!$this->autenticado) {
            self::$errores[] = 'El contrasena es Incorrecto';
            return;
        } 
    }

    public function autenticar() {
         // El usuario esta autenticado
         session_start();

         // Llenar el arreglo de la sesión
         $_SESSION['usuario'] = $this->correo;
         $_SESSION['login'] = true;

         header('Location: /admin');
    }

}