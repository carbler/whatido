<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Controla la creacion de eventos.
 *
 * @author carbler
 */
class crearEventoControlador  extends eventosControlador {
    
    private $eventos;
  
            
    /*
     * Crea una instancia de la clase eventoModelo, y asignas Css y js A la vista
     */
    public function __construct() {
        parent::__construct();
        $this->eventos =   $this->cargarModelo('evento');
        $this->vista->setCssPublic(array("estilos"));
        $this->vista->setJsPublic(array('funciones'));
        $this->vista->setJs(array('eventos'));
    }
    /*
     *  Metodo predterminado al llamar este controlado
     */
    public function index() {
      
        /*
         * Si el usuario no ha iniciado una Sesion, se redirecciona al Login
         */
        if (!session::getClaveSession("autenticado")) {
          $ruta ='usuarios/ingreso';
          $this->redireccionarPagina($ruta);
          exit;
        }
      
        /*
         * Enviamos a la vista los arrays de Categorias, Departamentos.
         * Asignamos el título a la vista. 
         */
        $this->vista->assign('categorias',$this->eventos->getCategorias());
        $this->vista->assign('departamentos',$this->eventos->getDepartamentos());
        $this->vista->assign('titulo', 'Crear evento');  
       
       
         
        
        /*
         *  Verificamos que sea el formulario correcto, el que nos envía los datos. 
         */
        if($this->getInt('crear_evento')==1){
            
            $this->vista->assign('datos_evento',$_POST);

            /*
             *  Verificamos que los campos obligatorios estén ingresados.
             */
            if(!$this->getTexto('nombre_evento')){
                $this->vista->assign('error','Debe Introducir Nombre De Usuario');
                $this->vista->renderizarVista('index','Crear Evento');
                exit;
            }
            
            
            if(!$this->getInt('categoria_evento')){
                $this->vista->assign('error','Debe escoger una categoría para su evento');
                $this->vista->renderizarVista('index','Crear Evento');
                exit;
            }
            
            if(!$this->getInt('ciudad_evento')){
                $this->vista->assign('error','Debe escoger una Ciudad para su evento');
                $this->vista->renderizarVista('index','Crear Evento');
                exit;
            }
           
            if(!$this->getTexto('direccion_evento')){
                $this->vista->assign('error','Debe Introducir una dirección para su evento');
                $this->vista->renderizarVista('index','Crear Evento');
                exit;
            }
            
            if(!$this->getTexto('lugar_evento')){
                $this->vista->assign('error','Debe Introducir un lugar  para su evento');
                $this->vista->renderizarVista('index','Crear Evento');
                exit;
            }
            
               date_default_timezone_set('America/Bogota');
              $hoy = date("Y-m-d");
               
            if($this->getPostParametro('fecha_ini')<$hoy){
                $this->vista->assign('error','Creo que estás confundio,tu fecha de inicio del evento está en el pasado');
                $this->vista->renderizarVista('index','Crear Evento');
                exit;
            }
            if(!$this->getPostParametro('fecha_ini')){
                $this->vista->assign('error','Debe Introducir fecha de inicio para su evento');
                $this->vista->renderizarVista('index','Crear Evento');
                exit;
            }
            
             if(!$this->getPostParametro('fecha_fin')){
                $this->vista->assign('error','Debe Introducir una fecha final  para su evento');
                $this->vista->renderizarVista('index','Crear Evento');
                exit;
            }
            
            if(!$this->getPostParametro('hora_ini')){
                $this->vista->assign('error','Debe Introducir hora de inicio para su evento');
                $this->vista->renderizarVista('index','Crear Evento');
                exit;
            }
            
            if(!$this->getPostParametro('hora_fin')){
                $this->vista->assign('error','Debe Introducir hora final  para su evento');
                $this->vista->renderizarVista('index','Crear Evento');
                exit;
            }
            
            if(!$this->getPostParametro('tel_evento')){
                $this->vista->assign('error','Debe Introducir un telefono valido para su evento');
                $this->vista->renderizarVista('index','Crear Evento');
                exit;
            }

            if(!$this->validarUrl($this->getPostParametro('web_evento'))){
                $this->vista->assign('error', 'La direccion url es inv&aacute;lida');
                $this->vista->renderizarVista('index', 'Crear Evento');
                exit;
            }
            
            if(!$this->validarEmail($this->getPostParametro('email_evento'))){
                $this->vista->assign('error', 'La direccion de email es inv&aacute;lida');
                $this->vista->renderizarVista('index', 'Crear Evento');
                exit;
            }
            
            if(!$this->getTexto('descripcion_evento')){
                $this->vista->assign('error','Debe Introducir una descripcion   para su evento');
                $this->vista->renderizarVista('index','Crear Evento');
                exit;
            }
             
            /*
             * Si la fecha inicial es mayor que la fecga final, asigna error
             */
            if($this->getPostParametro('fecha_ini')>$this->getPostParametro('fecha_fin')){
                $this->vista->assign('error','Creo que te confundiste en la fecha, Por Favor Revisa Bien ');
                $this->vista->renderizarVista('index','Crear Evento');
                exit;
            }
            
            /*
             * Si es el mismo día, y la hora inicial es mayor que la hora final asigne un error.
             */
            if($this->getPostParametro('fecha_ini')==$this->getPostParametro('fecha_fin')){
                
                if($this->getPostParametro('hora_ini')>$this->getPostParametro('hora_fin')){
                    $this->vista->assign('error','¿Estas Seguro Es La Hora Correcta?, Por Favor Revisa Bien ');
                    $this->vista->renderizarVista('index','Crear Evento');
                    exit;
                 }
            }
            
           
            
          /*
           * Enviamos los tados a la funcion setEvento del Modelo 
           */
            $this->eventos->setEvento(
                session::getClaveSession("id_usuario"),
                $this->getInt('categoria_evento'),
                $this->getInt('ciudad_evento'),
                $this->getPostParametro('nombre_evento'),
                $this->getPostParametro('direccion_evento'),
                $this->getPostParametro('lugar_evento'),
                $this->getPostParametro('fecha_ini'),
                $this->getPostParametro('fecha_fin'),
                $this->getPostParametro('hora_ini'),
                $this->getPostParametro('hora_fin'),
                $this->getTexto('tel_evento'),
                $this->getPostParametro('web_evento'),
                $this->getPostParametro('email_evento'),
                $this->getTexto('descripcion_evento'),
                $this->getInt('valor_evento')
            );
            
            /*
             * Verificamos que la inserción a la base de datos haya sido correcta,
             * consultando el nombre del evento en la BD.
             */
            if(!$this->eventos->verificarEvento( $this->getTexto('nombre_evento'))){
                $this->vista->assign('error', 'Error al crear el evento');
                $this->vista->renderizarVista('index', 'Crear Evento');
                exit;
            }
            
            
            $this->vista->assign('datos_evento', false);
            $this->vista->assign('mensaje', ' Enhorabuena!! El evento se Creo satisfactoriamente!!');

         
       
        }
        
        
         /*
          * Armado de la vista Index, de Crear Evento 
          */
         $this->vista->renderizarVista('index','CrearEvento');
           
      
    
    }
    
  
    
}


