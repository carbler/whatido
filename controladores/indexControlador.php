<?php

class indexControlador extends Controlador{

    private $eventos;

     public function __construct() {
         parent::__construct();
         $rutaModelo= ROOT .'modulos' .DS. 'eventos' .DS. 'modelos' .DS. 'eventoModelo.php' ;
         $this->eventos =   $this->importModelo('evento',$rutaModelo);
         $this->vista->setJsPublic(array('funciones'));
     }
     
     public function index()
     {
        $this->vista->assign('categorias',$this->eventos->getCategorias());
        $this->vista->assign('ciudades',$this->eventos->getCiudades());
        $this->vista->assign('departamentos',$this->eventos->getDepartamentos());

        $this->vista->setCssPublic(array("estilos"));
        $this->vista->assign('titulo','What I Do');
        $this->vista->assign('video',BASE_URL .'vistas/index/img/video.mp4');
        $this->vista->setJs(array('funciones'));
        $this->vista->renderizarVista('index','inicio');
     }

}
?>

