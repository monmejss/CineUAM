<?php
include_once ('../Modelo/OrdenAlimento/IAlimento.php');
//echo "<br>Entre en combo basico";
class HotDogChico extends IAlimento{
    private $id=4;
    private $nombre="Hot Dog Chico";
    private $precio=65.00;
    private $imagen="../Imagenes/ImagenesAlimentos/HotDogChico.png";

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