<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of eliminarControlador
 *
 * @author carbler
 */
class eliminarControlador extends eventosControlador {
      
    
    public function __construct() {
        parent::__construct();
        $this->eventos =   $this->cargarModelo('evento');
        $this->vista->setCssPublic(array("estilos")); 
        
        
    }
    
    public function delete($id) {
        
         /*
         * Si el usuario no ha iniciado una sesion, se redirecciona al login
         */
        if (!session::getClaveSession("autenticado")) {
          $ruta ='usuarios/ingreso';
          $this->redireccionarPagina($ruta);
          exit;
        }
        
           /*
         * Consulto el evento a eliminar y guardo en $user el identificador del usuario creador del evento.
         * Si no existe guardo en $user un 0
         */
        if(!$this->eventos->getEvento($id)){
            $user=0;
        }else{
            $user = $this->eventos->getEvento($id)["0"]["usuario"];
        }
        
            /*
         * Si el identificador del usuario logeado, es diferente del identificador del usuario creador del evento
         * Se renderiza una vista del error
         * 
         * Si es igual, el programa continua.
         */
        if(session::getClaveSession("id_usuario")!=$user){
             
            $this->redireccionarPagina('error/acceso/5050');
        
        }else{
            
            $this->eventos->deleteEvento($id);
            $this->redireccionarPagina("usuarios/perfil/info/".session::getClaveSession("id_usuario")."#test2");
        }
        
    }
    
}
