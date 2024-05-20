<?php
include_once ('..\modelo\OrdenAlimento\IAlimento.php');
//echo "<br>Entre en combo basico";
class HotDogJumbo extends IAlimento{
    private $id=5;
    private $nombre="Hot Dog Jumbo";
    private $precio=75.00;
    private $imagen="../Imagenes/ImagenesAlimentos/HotDogJumbo.png";

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