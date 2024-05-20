<?php
include_once ('..\ServiciosInternos\FabricaAlimentos\PalomitasChicas.php');
include_once ('..\ServiciosInternos\FabricaAlimentos\FabricaAbstractaAlimento.php');
//echo "<br>Entre en fabrica concreta de combo basico";
class FCPalomitasChicas extends FabricaAbstractaAlimento{
    public function crearAlimento()
    {
        return new PalomitasChicas();
    }
}
//echo "<br>Sali de fabrica concreta de combo basico";