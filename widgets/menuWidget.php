<?php
class menuWidget extends Widget
{
    private  $modelo;

    public function __construct(){
        $this->modelo = $this->cargarModelo('menu');
    }

    public function getMenu(){
         $datos['menu']= $this->modelo->getMenu();
         return $this->rederizarWidget('menu',$datos);
    }

    public function getConfig(){
        return array(
            'position' => 'sidebar',
            'show'=> 'all',
            'hide'=> array(),
        );
    }
}