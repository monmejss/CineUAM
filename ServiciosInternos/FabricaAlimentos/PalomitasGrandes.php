<?php
include_once ('..\modelo\OrdenAlimento\IAlimento.php');
//echo "<br>Entre en combo basico";
class PalomitasGrandes extends IAlimento{
    private $id=3;
    private $nombre="Palomitas Grandes";
    private $precio=85.00;
    private $imagen="../Imagenes/ImagenesAlimentos/PalomitasGrandes.jpg";

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