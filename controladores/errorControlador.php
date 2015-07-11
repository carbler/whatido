<?php

class errorControlador extends Controlador
{
    public function __construct(){
        parent::__construct();
    }
    
    public function index() 
    {
        $this->vista->assign('titulo','Error en La Pagina');
        $this->vista->assign('text', $this->getError());
        $this->vista->renderizarVista('index');
    }
    
    public function acceso($codigo = 0){
        $this->vista->assign('titulo','Error De Acceso');
        $this->vista->assign('text', $this->getError($codigo));
        $this->vista->renderizarVista('index');
    }

    public function infoperfil($codigo = 0){
        $this->vista->assign('titulo','Error Al Tratar De Mostrar La Información Solicitada');
        $this->vista->assign('text', $this->getError($codigo));
        $this->vista->renderizarVista('index');
    }


    private function getError($codigo=false)
    {
        $error['default']='Ha Ocurrido Un <strong>Error</strong> Y La Pagina No Puede Mostrarse';
        $error['5050']='Acceso Restringido, Usted No Esta Autorizado Para Acceder A Este Contenido';
        $error['6060']='El Tiempo De La Sesión Se Ha Agotado, Por Favor Inicie Una Nueva Sesión';
        $error['7070']='El Perfil Del Usuario Aun No Registra Información ';
        $error['8080']='El Evento Que Esta Tratando De Actualizar No Existe';

        if (!$codigo || !array_key_exists($codigo, $error)){
            return $error['default'];
        }
        else{
            return $error[$codigo];
        }
    }
}
?>

