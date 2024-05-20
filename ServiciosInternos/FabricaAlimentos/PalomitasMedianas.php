<?php
include_once ('..\modelo\OrdenAlimento\IAlimento.php');
//echo "<br>Entre en combo basico";
class PalomitasMedianas extends IAlimento{
    private $id=2;
    private $nombre="Palomitas Medianas";
    private $precio=75.00;
    private $imagen="../Imagenes/ImagenesAlimentos/PalomitasMedianas.jpg";

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