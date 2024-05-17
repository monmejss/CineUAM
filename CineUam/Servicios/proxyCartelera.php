<?php
class ProxyCartelera {
    private static $instancia;
    private $conexion;

    private function __construct() {
        $this->conexion = new mysqli("localhost", "root", "123456", "cineuam");

        if ($this->conexion->connect_error) {
            die("Error de conexión: " . $this->conexion->connect_error);
        }
    }
    public static function obtenerProxy() {
        if (!self::$instancia) {
            self::$instancia = new self();
        }
        return self::$instancia;
    }

    public function obtenerFunciones() {
        $query = "SELECT Funcion.IDFuncion, Pelicula.IDPelicula, Pelicula.Nombre, Pelicula.Sinopsis, Pelicula.Genero, Pelicula.Duracion, Pelicula.ImagenPelicula, Sala.IDSala, Sala.IDSucursal, Sala.Asientos, Sala.Tipo, Horario.IDHorario, Horario.Fecha, Horario.HoraInicio
                  FROM Funcion
                  JOIN Pelicula ON Funcion.IDPelicula = Pelicula.IDPelicula
                  JOIN Sala ON Funcion.IDSala = Sala.IDSala
                  JOIN Horario ON Funcion.IDHorario = Horario.IDHorario";
        $result = $this->conexion->query($query);

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return [];
        }
    }
}
?>
