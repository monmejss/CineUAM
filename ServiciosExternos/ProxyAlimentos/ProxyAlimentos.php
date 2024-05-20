<?php
//echo "<br>Estoy en proxy alimentos";
include_once ("..\modelo\OrdenAlimento\Menu.php");
include_once ("..\modelo\OrdenAlimento\MenuAlimentos.php");
class ProxyAlimentos implements Menu{
    public $menuAlimentos;

    public function leer(){
        if($this->menuAlimentos==NULL)
        {
            $this->menuAlimentos=new MenuAlimentos();
        }
        //echo "<br>Cree el menu alimentos";
        return $this->menuAlimentos->leer();
    }
    public function mostrar(){}
    public function agregar($producto){
        if($this->menuAlimentos==NULL)
        {
            $this->menuAlimentos=new MenuAlimentos();
        }
        $this->menuAlimentos->agregar($producto);
    }
}