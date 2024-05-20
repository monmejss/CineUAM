<?php
include_once ('..\ServiciosInternos\FabricaAlimentos\RefrescoChico.php');
include_once ('..\ServiciosInternos\FabricaAlimentos\FabricaAbstractaAlimento.php');
//echo "<br>Entre en fabrica concreta de combo basico";
class FCRefrescoChico extends FabricaAbstractaAlimento{
    public function crearAlimento()
    {
        return new RefrescoChico();
    }
}
//echo "<br>Sali de fabrica concreta de combo basico";