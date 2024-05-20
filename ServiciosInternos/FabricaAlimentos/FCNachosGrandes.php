<?php
include_once ('..\ServiciosInternos\FabricaAlimentos\NachosGrandes.php');
include_once ('..\ServiciosInternos\FabricaAlimentos\FabricaAbstractaAlimento.php');
//echo "<br>Entre en fabrica concreta de combo basico";
class FCNachosGrandes extends FabricaAbstractaAlimento{
    public function crearAlimento()
    {
        return new NachosGrandes();
    }
}
//echo "<br>Sali de fabrica concreta de combo basico";