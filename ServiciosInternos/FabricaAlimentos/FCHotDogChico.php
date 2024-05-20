<?php
include_once ('..\ServiciosInternos\FabricaAlimentos\HotDogChico.php');
include_once ('..\ServiciosInternos\FabricaAlimentos\FabricaAbstractaAlimento.php');
//echo "<br>Entre en fabrica concreta de combo basico";
class FCHotDogChico extends FabricaAbstractaAlimento{
    
    public function crearAlimento()
    {
        return new HotDogChico();
    }
}
//echo "<br>Sali de fabrica concreta de combo basico";