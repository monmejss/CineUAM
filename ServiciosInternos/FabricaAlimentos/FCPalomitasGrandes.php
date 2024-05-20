<?php
include_once ('..\ServiciosInternos\FabricaAlimentos\PalomitasGrandes.php');
include_once ('..\ServiciosInternos\FabricaAlimentos\FabricaAbstractaAlimento.php');
//echo "<br>Entre en fabrica concreta de combo basico";
class FCPalomitasGrandes extends FabricaAbstractaAlimento{
    public function crearAlimento()
    {
        return new PalomitasGrandes();
    }
}
//echo "<br>Sali de fabrica concreta de combo basico";