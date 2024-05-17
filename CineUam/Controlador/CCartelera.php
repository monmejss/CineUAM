<?php
include_once("Servicios/proxyCartelera.php");
include_once("modelo/WholePart/pelicula.php");
include_once("modelo/WholePart/horario.php");
include_once("modelo/WholePart/sala.php");

class FuncionController {
    private $db;

    public function __construct() {
        $this->db = new DatabaseProxy();
    }

    public function obtenerFunciones() {
        $query = "SELECT peliculas.id AS pelicula_id, peliculas.nombre AS pelicula_nombre, peliculas.descripcion, peliculas.duracion, peliculas.imagen, peliculas.genero,
                         horarios.id AS horario_id, horarios.fecha, horarios.hora,
                         salas.id AS sala_id, salas.sucursal, salas.capacidad, salas.tipo
                  FROM funciones
                  JOIN peliculas ON funciones.pelicula_id = peliculas.id
                  JOIN horarios ON funciones.horario_id = horarios.id
                  JOIN salas ON funciones.sala_id = salas.id";
        $result = $this->db->query($query);

        $funciones = [];
        while ($row = $result->fetch_assoc()) {
            $pelicula = new Pelicula($row['pelicula_id'], $row['pelicula_nombre'], $row['descripcion'], $row['duracion'], $row['imagen'], $row['genero']);
            $horario = new Horario($row['horario_id'], $row['fecha'], $row['hora']);
            $sala = new Sala($row['sala_id'], $row['sucursal'], $row['capacidad'], $row['tipo']);
            $funciones[] = new FuncionCine($pelicula, $horario, $sala);
        }

        return $funciones;
    }
}
?>
