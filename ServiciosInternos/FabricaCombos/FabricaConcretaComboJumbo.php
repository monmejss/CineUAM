<?php
include_once '..\ServiciosInternos\FabricaCombos\ComboJumbo.php';
include_once ('..\ServiciosInternos\FabricaCombos\FabricaAbstractaCombo.php');
//echo "<br>Entre en fabrica concreta de combo jumbo";
class FabricaConcretaComboJumbo extends FabricaAbstractaCombo{
    private $imagen="../Imagenes/ImagenesCombos/ComboJumbo.webp";
    private $id=4;
    private $nombre="Combo Jumbo";
    private $alimentos=array();
    private $precio=365.00;
    public function crearCombo()
    {
        array_push($this->alimentos, "Palomitas grandes");
        array_push($this->alimentos, "Refresco grande");
        array_push($this->alimentos, "Refresco Grande");
        array_push($this->alimentos, "Hot dog");
        array_push($this->alimentos, "Nachos");
        array_push($this->alimentos, "Cornetto");
        return new ComboFamiliar($this->id, $this->nombre, $this->precio, $this->imagen, $this->alimentos);
    }

    public function getCombo()
    {
        return $this->Combo;
    }
}
//echo "<br>Sali de fabrica concreta de combo jumbo";
