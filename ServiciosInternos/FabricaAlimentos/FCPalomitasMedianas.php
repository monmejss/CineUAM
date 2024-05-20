<?php
include_once ('..\ServiciosInternos\FabricaAlimentos\PalomitasMedianas.php');
include_once ('..\ServiciosInternos\FabricaAlimentos\FabricaAbstractaAlimento.php');
//echo "<br>Entre en fabrica concreta de combo basico";
class FCPalomitasMedianas extends FabricaAbstractaAlimento{
    public function crearAlimento()
    {
        return new PalomitasMedianas();
    }
}
//echo "<br>Sali de fabrica concreta de combo basico";