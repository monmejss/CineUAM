<?php
include_once '..\ServiciosInternos\FabricaCombos\ComboFamiliar.php';
include_once ('..\ServiciosInternos\FabricaCombos\FabricaAbstractaCombo.php');
//echo "<br>Entre en fabrica concreta de combo familiar";
class FabricaConcretaComboFamiliar extends FabricaAbstractaCombo{
    private $imagen="../Imagenes/ImagenesCombos/ComboFamiliar.webp";
    private $id=3;
    private $nombre="Combo Familiar";
    private $alimentos=array();
    private $precio=440.00;
    public function crearCombo()
    {
        array_push($this->alimentos, "Palomitas grandes");
        array_push($this->alimentos, "Palomitas grandes");
        array_push($this->alimentos, "Refresco grande");
        array_push($this->alimentos, "Refresco Grande");
        array_push($this->alimentos, "Refresco Grande");
        array_push($this->alimentos, "Pon Pons");
        return new ComboFamiliar($this->id, $this->nombre, $this->precio, $this->imagen, $this->alimentos);
    }

    public function getCombo()
    {
        return $this->Combo;
    }
}
//echo "<br>Sali de fabrica concreta de combo familiar";