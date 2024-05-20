<?php
include_once ('..\ServiciosInternos\FabricaAlimentos\NachosChicos.php');
include_once ('..\ServiciosInternos\FabricaAlimentos\FabricaAbstractaAlimento.php');
//echo "<br>Entre en fabrica concreta de combo basico";
class FCNachosChicos extends FabricaAbstractaAlimento{
    public function crearAlimento()
    {
        return new NachosChicos();
    }
}
//echo "<br>Sali de fabrica concreta de combo basico";