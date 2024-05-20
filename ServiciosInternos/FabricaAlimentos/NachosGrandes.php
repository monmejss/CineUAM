<?php
include_once ('..\modelo\OrdenAlimento\IAlimento.php');
//echo "<br>Entre en combo basico";
class NachosGrandes extends IAlimento{
    private $id=7;
    private $nombre="Nachos Grandes";
    private $precio=85.00;
    private $imagen="../Imagenes/ImagenesAlimentos/NachosGrandes.png";

    public function __construct() {
    }

    public function getPrecio()
    {
        return $this->precio;
    }
    public function getImagen(){
        return $this->imagen;
    }

    public function getId(){
        return $this->id;
    }
    public function getNombre(){
        return $this->nombre;
    }
}