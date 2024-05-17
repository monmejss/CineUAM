<?php
class pelicula{
    public $IDPelicula;
    public $Nombre;
    public $Sinopsis; 
    public $Duracion;
    public $ImagenPelicula;
    public $Genero; 
    
    // Constructor
    public function __construct($IDPelicula,$Nombre, $Sinopsis, $Duracion, $ImagenPelicula, $Genero){
        $this->IDPelicula= $IDPelicula;
        $this->Nombre= $Nombre;
        $this->Sinopsis= $Sinopsis;
        $this->Duracion= $Duracion;
        $this->ImagenPelicula= $ImagenPelicula;
        $this->Genero= $Genero;
    }
    //ID
    public function set_IDPelicula($IDPelicula){
        $this->IDPelicula= $IDPelicula;
    }
    public function get_IDPelicula(){
        return $this->IDPelicula;
    }
    // Nombre
    public function set_Nombre($Nombre){
        $this->Nombre= $Nombre;
    }
    public function get_Nombre(){
        return $this->Nombre;
    } 
    // Sinopsis
    public function set_Sinopsis($Sinopsis){
        $this->Sinopsis= $Sinopsis;
    }
    public function get_Sinopsis(){
        return $this->Sinopsis;
    }
    // Duracion
    public function set_Duracion($Duracion){
        $this->Duracion= $Duracion;
    }
    public function get_Duracion(){
        return $this->Duracion;
    }
    // Imagen
    public function set_ImagenPelicula($ImagenPelicula){
        $this->ImagenPelicula= $ImagenPelicula;
    }
    public function get_ImagenPelicula(){
        return $this->ImagenPelicula;
    }
    // Genero
    public function set_Genero($Genero){
        $this->Genero= $Genero;
    }
    public function get_Genero(){
        return $this->Genero;
    } 
}
?>