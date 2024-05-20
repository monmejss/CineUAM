<?php
//echo "<br>Estoy en proxy alimentos";
include_once ("..\modelo\OrdenAlimento\Menu.php");
include_once ("..\modelo\OrdenAlimento\MenuAlimentos.php");
class ProxyCombos implements Menu{
    private $menuCombos;

    public function leer(){
        if($this->menuCombos==NULL)
        {
            $this->menuCombos=new MenuCombos();
        }
        return $this->menuCombos->leer();
    }
    public function mostrar(){}
    public function agregar($producto){
        if($this->menuCombos==NULL)
        {
            $this->menuCombos=new MenuCombos();
        }
        $this->menuCombos->agregar($producto);
    }
}