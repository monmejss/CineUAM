<?php
include_once '..\ServiciosInternos\FabricaCombos\ComboCuates.php';
include_once ('..\ServiciosInternos\FabricaCombos\FabricaAbstractaCombo.php');
//echo "<br>Entre en fabrica concreta de combo cuates";
class FabricaConcretaComboCuates extends FabricaAbstractaCombo{
    private $imagen="../Imagenes/ImagenesCombos/ComboCuates.png";
    private $id=2;
    private $nombre="Combo Cuates";
    private $alimentos=array();
    private $precio=246.00;
    public function crearCombo()
    {
        array_push($this->alimentos, "Palomitas grandes");
        array_push($this->alimentos, "Refresco grande");
        array_push($this->alimentos, "Refresco Grande");
        return new ComboCuates($this->id, $this->nombre, $this->precio, $this->imagen, $this->alimentos);
    }

    public function getCombo()
    {
        return $this->Combo;
    }
}
//echo "<br>Sali de fabrica concreta de combo basico";