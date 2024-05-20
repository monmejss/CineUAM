<?php
include_once ('..\modelo\OrdenAlimento\IAlimento.php');
//echo "<br>Entre en combo basico";
class Cornetto extends IAlimento{
    private $id=12;
    private $nombre="Cornetto";
    private $precio=40.00;
    private $imagen="../Imagenes/ImagenesAlimentos/Cornetto.png";

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