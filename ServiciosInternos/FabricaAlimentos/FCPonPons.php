<?php
include_once ('..\ServiciosInternos\FabricaAlimentos\PonPons.php');
include_once ('..\ServiciosInternos\FabricaAlimentos\FabricaAbstractaAlimento.php');
//echo "<br>Entre en fabrica concreta de combo basico";
class FCPonPons extends FabricaAbstractaAlimento{
    public function crearAlimento()
    {
        return new PonPons();
    }
}
//echo "<br>Sali de fabrica concreta de combo basico";