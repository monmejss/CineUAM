<?php
include_once ('..\ServiciosInternos\FabricaAlimentos\RefrescoMediano.php');
include_once ('..\ServiciosInternos\FabricaAlimentos\FabricaAbstractaAlimento.php');
//echo "<br>Entre en fabrica concreta de combo basico";
class FCRefrescoMediano extends FabricaAbstractaAlimento{
    public function crearAlimento()
    {
        return new RefrescoMediano();
    }
}
//echo "<br>Sali de fabrica concreta de combo basico";