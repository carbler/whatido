<?php
/**
 * Created by PhpStorm.
 * User: jr
 * Date: 19/06/2015
 * Time: 06:30 PM
 * 
 * 
 * Clase que busca el perfil de un usuario
 */

class perfilControlador extends usuariosControlador {

    
     private $usuario;
    
    public function __construct(){
        parent::__construct();
        
        /**
         * Verificamos si existe una session iniciada, y si existe... se guarda el usuario, para proximas validaciones
         */
         if (!session::getClaveSession("autenticado")) {
            $this->usuario= 0;
        }else{
            $this->usuario = session::getClaveSession("id_usuario");
        }

      

        $this->perfil= $this->cargarModelo('perfil');

        $this->vista->setCssPublic(array("estilos"));
         $this->vista->setJs(array('perfil'));
         $this->vista->assign('titulo','Perfil');
    }
    
    /**
     *  Método para visualizar informacion de un evento 
     * @param type $id  identificador unico del evento
     */
    public function info($id){
    
        // armado vista persona
        if($this->perfil->esPoE($id)=="persona"){
             $this->vista->assign('usuario',$this->usuario); 
            $this->vista->assign('eventos',$this->perfil->getEventosUsuario($id)); 
            $this->vista->assign('persona',$this->perfil->getPerfilPersona($id));
             $this->vista->renderizarVista('persona'); 
        }
           // armado vista empresa
        if($this->perfil->esPoE($id)=="empresa"){
            
             $this->vista->assign('usuario',$this->usuario); 
            $this->vista->assign('eventos',$this->perfil->getEventosUsuario($id)); 
            $this->vista->assign('empresa',$this->perfil->getPerfilEmpresa($id));
               $this->vista->renderizarVista('empresa'); 
        }
           // armado vista usuario no encontrado
        if($this->perfil->esPoE($id)=="false"){
              $this->redireccionarPagina('error/infoperfil/7070');
        }
        
       
    }
}