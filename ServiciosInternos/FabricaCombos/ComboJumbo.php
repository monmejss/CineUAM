<?php
include_once '../Modelo/OrdenAlimento/ICombo.php';
//echo "<br>Entre en combo familiar";
class ComboJumbo extends ICombo{
    private $imagen;
    private $id;
    private $nombre;
    private $alimentos=array();
    private $precio;
    public function __construct($id, $nombre, $precio, $imagen, $alimentos) {
        $this->alimentos = $alimentos;
        $this->id=$id;
        $this->nombre=$nombre;
        $this->precio=$precio;
        $this->imagen=$imagen;
    }

    public function verCombo()
    {
        echo "<br>---------------COMBO JUMBO---------------";
        echo "<br>El combo jumbo contiene los siguientes alimentos:<br>";
        $i=0;
        foreach($this->alimentos as $alimento)
        {
            $i++;
            echo "$i. $alimento <br>";
        }
        echo "Precio: ".$this->getPrecio();
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
    public function getAlimentos(){
        return $this->alimentos;
    }
}
