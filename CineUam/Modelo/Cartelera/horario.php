<?php
class horario {
    public $IDHorario;
    public $Fecha;
    public $HoraInicio;

    public function __construct($IDHorario, $Fecha, $HoraInicio) {
        $this->IDHorario = $IDHorario;
        $this->Fecha = $Fecha;
        $this->HoraInicio = $HoraInicio;
    }

    public function getIDHorario() {
        return $this->IDHorario;
    }

    public function setIDHorario($IDHorario) {
        $this->IDHorario = $IDHorario;
    }

    public function getFecha() {
        return $this->Fecha;
    }

    public function setFecha($Fecha) {
        $this->Fecha = $Fecha;
    }

    public function getHoraInicio() {
        return $this->HoraInicio;
    }

    public function setHoraInicio($HoraInicio) {
        $this->HoraInicio = $HoraInicio;
    }
}
?>
