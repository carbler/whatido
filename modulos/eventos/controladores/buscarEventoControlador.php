<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Controla la busqueda de enventos
 *
 * @author carbler
 */
class buscarEventoControlador extends eventosControlador {
   
     private $evento;
     
    
    /**
    * Crea una Instancia de la clase eventoModelo  
    * Asigna a la vista el Css publico
    */ 
    public function __construct() {
        parent::__construct();
        $this->evento =   $this->cargarModelo('evento');
        $this->vista->setCssPublic(array("estilos"));
//        $this->vista->setJs(array("eventos"));
         
    }
    
    
    
    /**
     * verifica si se asignaron valores a los parametros si no les asigna los valores por defecto
     * @param $id identificador unico del evento 
     * @internal (!$this->evento->getEvento($id))   Si No Existe un evento con ese identificador, renderiza la vista de error
     * @internal else   Si existe un evento con ese identificador
     * @internal $this->vista->assign('titulo', 'Evento')  Asigna título a la vista
     * @internal   $this->vista->assign('eventos',$this->evento->getEvento($id))  Enviamos el evento a la vista
     * @internal    $this->vista->renderizarVista('index','buscar')  Renderizamos la vista index de buscar evento. 
     */
    public function info($id) {
        
        
        if(!$this->evento->getEvento($id)){
            
            echo "No existe este evento";
        
        }else {
            $this->vista->assign('titulo', 'Evento');
            $this->vista->assign('eventos',$this->evento->getEvento($id));
            $this->vista->renderizarVista('index','buscar');
            
        }
        
    }
}
