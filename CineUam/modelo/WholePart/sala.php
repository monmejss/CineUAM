<?php
class sala{
    public $IDSala;
    public $IDSucursal;
    public $Asientos;
    public $Tipo; 
    
    // Constructor
    public function __construct($IDSala, $IDSucursal, $Asientos, $Tipo){
        $this->IDSala= $IDSala;
        $this->IDSucursal= $IDSucursal;
        $this->Asientos= $Asientos;
        $this->Tipo= $Tipo;
        
    }
    //ID
    public function set_IDSala($IDSala){
        $this->IDSala= $IDSala;
    }
    public function get_IDSala(){
        return $this->IDSala;
    }
    // IDSucursal
    public function set_IDSucursal($IDSucursal){
        $this->IDSucursal= $IDSucursal;
    }
    public function get_IDSucursal(){
        return $this->IDSucursal;
    }
    // Asientos
    public function set_Asientos($Asientos){
        $this->Asientos= $Asientos;
    }
    public function get_Asientos(){
        return $this->Asientos;
    }
    // Tipo
    public function set_Tipo($Tipo){
        $this->Tipo= $Tipo;
    }
    public function get_Tipo(){
        return $this->Tipo;
    }
}
?>