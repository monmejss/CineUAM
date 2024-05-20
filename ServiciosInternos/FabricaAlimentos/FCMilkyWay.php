<?php
include_once ('..\ServiciosInternos\FabricaAlimentos\MilkyWay.php');
include_once ('..\ServiciosInternos\FabricaAlimentos\FabricaAbstractaAlimento.php');
//echo "<br>Entre en fabrica concreta de combo basico";
class FCMilkyWay extends FabricaAbstractaAlimento{
    public function crearAlimento()
    {
        return new MilkyWay();
    }
}
//echo "<br>Sali de fabrica concreta de combo basico";