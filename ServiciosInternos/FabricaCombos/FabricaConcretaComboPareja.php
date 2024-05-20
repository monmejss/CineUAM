<?php
include_once '..\ServiciosInternos\FabricaCombos\ComboPareja.php';
include_once ('..\ServiciosInternos\FabricaCombos\FabricaAbstractaCombo.php');
//echo "<br>Entre en fabrica concreta de combo pareja";
class FabricaConcretaComboPareja extends FabricaAbstractaCombo{
    private $imagen="../Imagenes/ImagenesCombos/ComboPareja.png";
    private $id=5;
    private $nombre="Combo Pareja";
    private $alimentos=array();
    private $precio=310.00;
    public function crearCombo()
    {
        array_push($this->alimentos, "Palomitas grandes");
        array_push($this->alimentos, "Refresco grande");
        array_push($this->alimentos, "Refresco Grande");
        array_push($this->alimentos, "Nachos");
        return new ComboPareja($this->id, $this->nombre, $this->precio, $this->imagen, $this->alimentos);
    }

    public function getCombo()
    {
        return $this->Combo;
    }
}
//echo "<br>Sali de fabrica concreta de combo pareja";

