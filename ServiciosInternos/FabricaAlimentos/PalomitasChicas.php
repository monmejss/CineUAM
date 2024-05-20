<?php
include_once ('..\modelo\OrdenAlimento\IAlimento.php');
//echo "<br>Entre en combo basico";
class PalomitasChicas extends IAlimento{
    private $id=1;
    private $nombre="Palomitas Chicas";
    private $precio=70.00;
    private $imagen="../Imagenes/ImagenesAlimentos/PalomitasChicas.jpg";

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