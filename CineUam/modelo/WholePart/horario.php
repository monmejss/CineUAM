<?php
class horario{
    public $IDHorario;
    public $Fecha;
    public $HoraInicio;
    
    // Constructor
    public function __construct($IDHorario, $Fecha, $HoraInicio){
        $this->IDHorario= $IDHorario;
        $this->Fecha= $Fecha;
        $this->HoraInicio= $HoraInicio;
    }
    // IDHorario
    public function set_IDHorario($IDHorario){
        $this->IDHorario= $IDHorario;
    }
    public function get_IDHorario(){
        return $this->IDHorario;
    }
    // Fecha
    public function set_Fecha($Fecha){
        $this->Fecha= $Fecha;
    }
    public function get_Fecha(){
        return $this->Fecha;
    }
    // Hora
    public function set_HoraInicio($HoraInicio){
        $this->HoraInicio= $HoraInicio;
    }
    public function get_HoraInicio(){
        return $this->HoraInicio;
    }
}
?>