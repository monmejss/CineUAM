<?php
include_once ('..\modelo\OrdenAlimento\IAlimento.php');
//echo "<br>Entre en combo basico";
class NachosChicos extends IAlimento{
    private $id=6;
    private $nombre="Nachos Chicos";
    private $precio=70.00;
    private $imagen="../Imagenes/ImagenesAlimentos/NachosChicos.png";

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