<?php
// Clase funcion
class FuncionCine{
    public pelicula $pelicula;
    public horario $horario;
    public sala $sala; 
    
    public function __construct($pelicula, $horario, $sala){
        $this->pelicula= $pelicula;
        $this->horario= $horario;
        $this->sala= $sala; 
    }

    public function mostrarCartelera(){
        // Pelicula
        echo "Nombre: " . $this->pelicula->get_Nombre() . "<br>";
        echo "Sinopsis: " . $this->pelicula->get_Sinopsis() . "<br>";
        echo "Duración: " . $this->pelicula->get_Duracion() . "<br>";
        echo "Genero: " . $this->pelicula->get_Genero() . "<br>";
        echo "Imagen: <img src='" . $this->pelicula->get_ImagenPelicula() . "'><br>";
        //Horario
        echo "Fecha: " . $this->horario->get_Fecha() . "<br>";
        echo "Hora de Inicio: " . $this->horario->get_HoraInicio() . "<br>";
        // Sala
        echo "Tipo de Sala: " . $this->sala->get_Tipo() . "<br>";
    }
    public function set_pelicula($pelicula){
        $this->pelicula=$pelicula; 
    }
    public function get_pelicula(){
        return $this->pelicula; 
    }

    public function set_horario($horario){
        $this->horario=$horario; 
    }
    public function get_horario(){
        return $this->horario; 
    }

    public function set_sala($sala){
        $this->sala=$sala; 
    }
    public function get_sala(){
        return $this->sala; 
    }
}