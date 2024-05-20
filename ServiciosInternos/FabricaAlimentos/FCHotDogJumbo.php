<?php
include_once ('..\ServiciosInternos\FabricaAlimentos\HotDogJumbo.php');
include_once ('..\ServiciosInternos\FabricaAlimentos\FabricaAbstractaAlimento.php');
//echo "<br>Entre en fabrica concreta de combo basico";
class FCHotDogJumbo extends FabricaAbstractaAlimento{
    public function crearAlimento()
    {
        return new HotDogJumbo();
    }
}
//echo "<br>Sali de fabrica concreta de combo basico";