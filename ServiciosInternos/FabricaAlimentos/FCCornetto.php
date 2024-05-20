<?php
include_once ('..\ServiciosInternos\FabricaAlimentos\Cornetto.php');
include_once ('..\ServiciosInternos\FabricaAlimentos\FabricaAbstractaAlimento.php');
//echo "<br>Entre en fabrica concreta de combo basico";
class FCCornetto extends FabricaAbstractaAlimento{
    public function crearAlimento()
    {
        return new Cornetto();
    }
}
//echo "<br>Sali de fabrica concreta de combo basico";