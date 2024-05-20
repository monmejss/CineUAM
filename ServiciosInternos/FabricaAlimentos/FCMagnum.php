<?php
include_once ('..\ServiciosInternos\FabricaAlimentos\Magnum.php');
include_once ('..\ServiciosInternos\FabricaAlimentos\FabricaAbstractaAlimento.php');
//echo "<br>Entre en fabrica concreta de combo basico";
class FCMagnum extends FabricaAbstractaAlimento{
    public function crearAlimento()
    {
        return new Magnum();
    }
}
//echo "<br>Sali de fabrica concreta de combo basico";