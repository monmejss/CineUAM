<?php
include_once ('..\ServiciosInternos\FabricaAlimentos\RefrescoGrande.php');
include_once ('..\ServiciosInternos\FabricaAlimentos\FabricaAbstractaAlimento.php');
//echo "<br>Entre en fabrica concreta de combo basico";
class FCRefrescoGrande extends FabricaAbstractaAlimento{
    public function crearAlimento()
    {
        return new RefrescoGrande();
    }
}
//echo "<br>Sali de fabrica concreta de combo basico";