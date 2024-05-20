<?php
include_once ('..\modelo\OrdenAlimento\IAlimento.php');
//echo "<br>Entre en combo basico";
class PonPons extends IAlimento{
    private $id=11;
    private $nombre="Pon Pons";
    private $precio=45.00;
    private $imagen="../Imagenes/ImagenesAlimentos/PonPons.jpg";

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