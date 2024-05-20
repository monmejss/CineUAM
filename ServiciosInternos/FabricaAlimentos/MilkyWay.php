<?php
include_once ('..\modelo\OrdenAlimento\IAlimento.php');
//echo "<br>Entre en combo basico";
class MilkyWay extends IAlimento{
    private $id=13;
    private $nombre="MilkyWay";
    private $precio=35.00;
    private $imagen="../Imagenes/ImagenesAlimentos/MilkyWay.png";

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