<?php
include_once '..\ServiciosInternos\FabricaCombos\ComboBasico.php';
include_once ('..\ServiciosInternos\FabricaCombos\FabricaAbstractaCombo.php');
//echo "<br>Entre en fabrica concreta de combo basico";
class FabricaConcretaComboBasico extends FabricaAbstractaCombo{
    private $imagen="../Imagenes/ImagenesCombos/ComboBasico.png";
    private $id=1;
    private $nombre="Combo Basico";
    private $alimentos=array();
    private $precio=229.00;
    public function crearCombo()
    {
        array_push($this->alimentos, "Palomitas grandes");
        array_push($this->alimentos, "Refresco grande");
        array_push($this->alimentos, "Hot dog");
        return new ComboBasico($this->id, $this->nombre, $this->precio, $this->imagen, $this->alimentos);
    }

    public function getCombo()
    {
        return $this->ComboBasico;
    }
}
//echo "<br>Sali de fabrica concreta de combo basico";