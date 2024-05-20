<?php
include_once ('..\modelo\OrdenAlimento\IAlimento.php');
//echo "<br>Entre en combo basico";
class RefrescoChico extends IAlimento{
    private $id=10;
    private $nombre="Refresco Chico";
    private $precio=67.00;
    private $imagen="../Imagenes/ImagenesAlimentos/RefrescoChico.jpg";

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