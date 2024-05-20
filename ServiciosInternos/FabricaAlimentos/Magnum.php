<?php
include_once ('..\modelo\OrdenAlimento\IAlimento.php');
//echo "<br>Entre en combo basico";
class Magnum extends IAlimento{
    private $id=14;
    private $nombre="Magnum";
    private $precio=54.00;
    private $imagen="../Imagenes/ImagenesAlimentos/Magnum.jpg";

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