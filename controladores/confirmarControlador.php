<?php
/**
 * Created by PhpStorm.
 * User: jr
 * Date: 29/05/2015
 * Time: 03:41 PM
 */

class confirmarControlador extends Controlador{

            
    /**
     * Definimos El Metodo Por Defecto index Para Cada Controlador Que Extienda De Esta Clase
     */
    public function index()
    {
        $this->vista->setCssPublic(array("estilos"));
        $this->vista->renderizarVista('index');
    }
    
    
    public function delete($id){

        if(!Session::getClaveSession('autenticado')){
            $this->redireccionarPagina();
        }
        $this->vista->setCssPublic(array("estilos"));
        $this->vista->assign('enlace', BASE_URL. "eventos/eliminar/delete/".$id);
        $this->vista->assign('text',"Esta Seguro Que Desea Eliminar El Registro, Esta Información No Se Podra Recuperar");
        $this->vista->renderizarVista('index');
    }
    
    public function salir(){

        if(!Session::getClaveSession('autenticado')){
            $this->redireccionarPagina();
        }
        $this->vista->setCssPublic(array("estilos"));
        $this->vista->assign('enlace', BASE_URL. "usuarios/ingreso/cerrar");
        $this->vista->assign('text',"En Realidad Desea Cerrar Su Sessión");
        $this->vista->renderizarVista('index');
    }
}