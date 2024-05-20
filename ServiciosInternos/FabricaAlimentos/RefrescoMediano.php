<?php
include_once ('..\modelo\OrdenAlimento\IAlimento.php');
//echo "<br>Entre en combo basico";
class RefrescoMediano extends IAlimento{
    private $id=9;
    private $nombre="Refresco Mediano";
    private $precio=72.00;
    private $imagen="../Imagenes/ImagenesAlimentos/RefrescoMediano.png";

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