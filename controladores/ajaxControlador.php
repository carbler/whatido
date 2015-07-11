<?php

class ajaxControlador extends Controlador
{
    private $ajax;
    
    public function __construct() {
        parent::__construct();
        $this->ajax = $this->cargarModelo('ajax');
        
    }
     /**
     *  Funcion index
     */
    public function index()
    {
        $this->vista->assign('titulo', 'Ejemplo de AJAX');
        $this->vista->setJs(array('ajax'));
        $this->vista->assign('paises', $this->ajax->getPaises());
        $this->vista->renderizar('index');
    }
    
     /**
     *  imprime un array formateado en Json, que contiene los eventos del día. 
     */
    public function getEventosDelDia()
    {
        echo json_encode($this->ajax->getEventosdeldia());
    }
     
   
     /**
     *  imprime un array formateado en Json, que contiene los eventos del usuario que inici+o sesion
     */
     public function getEventosUsuario()
    {
        $id_usuario = session::getClaveSession("id_usuario");
        echo json_encode($this->ajax->getEventosUsuario($id_usuario));
    }
    
      /**
     *  imprime un array formateado en Json, que contiene los eventos que cumplan con los parametros enviado en la busqueda principal
     */
     public function  getEventosIndex()
    {
        echo json_encode($this->ajax-> getEventosIndex($this->getPostParametro("ciudad"),$this->getPostParametro("categoria"),$this->getPostParametro("fecha"),$this->getPostParametro("gratis")));
    }
       /**
     *  imprime un array formateado en Json, que contiene las ciudades de un departamento
     */
    public function getCiudadesDepartamento($departamento){
        echo json_encode($this->ajax->getCiudadPorDepartamento($departamento));
    }
}
?>
