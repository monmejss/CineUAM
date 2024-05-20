<?php
include_once ('..\modelo\OrdenAlimento\IAlimento.php');
//echo "<br>Entre en combo basico";
class RefrescoGrande extends IAlimento{
    private $id=8;
    private $nombre="Refresco Grande";
    private $precio=76.00;
    private $imagen="../Imagenes/ImagenesAlimentos/RefrescoGrande.png";

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