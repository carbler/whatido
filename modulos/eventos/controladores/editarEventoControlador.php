<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/** 
 * Controla la edicion de eventos. 
 * @author carbler
 */
class editarEventoControlador extends eventosControlador {
    
    
    private $eventos;
  
    /*
     * Se crea una instacia de la clase eventoModelo y se guarda en la variable eventos. 
     */        
    public function __construct() {
        parent::__construct();
        $this->eventos =   $this->cargarModelo('evento');
        $this->vista->setCssPublic(array("estilos")); 
        $this->vista->setJsPublic(array('funciones'));
        $this->vista->setJs(array('eventos'));
        
    }
    
    
      /**
     * Metodo que controla la edicion de eventos
     *
     * @param $id identificador unico del evento 
     */
    public function editar($id){
         
        /*
         * Si el usuario no ha iniciado una sesion, se redirecciona al login
         */
        if (!session::getClaveSession("autenticado")) {
          $ruta ='usuarios/ingreso';
          $this->redireccionarPagina($ruta);
          exit;
        }
        
        /*
         * Consulto el evento a editar y guardo en $user el identificador del usuario creador del evento.
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
            
            /*
             * Asignamos el titulo a la vista, 
             * Enviamos Un array con las Categorias, otro con los departamentos
             * y otro array con los datos del evento a editar
             */
              $this->vista->assign('titulo',"Editar Evento");
              $this->vista->assign('categorias',$this->eventos->getCategorias());
              $this->vista->assign('departamentos',$this->eventos->getDepartamentos());
              $this->vista->assign('evento',$this->eventos->getEvento($id));



              /*
               * Verificamos que el formulario que nos envia los datos sea el correcto
               */

             if($this->getInt('editar_evento')==1){

                $this->vista->assign('datos_evento',$_POST);
          
                /*
                 * Verificamos que los campos requeridos esten digitados.
                 */
                if(!$this->getTexto('nombre_evento')){
                    $this->vista->assign('error','Debe Introducir Nombre De Usuario');
                    $this->vista->renderizarVista('editar','editarEvento');    
                    exit;
                }

                if(!$this->getInt('categoria_evento')){
                    $this->vista->assign('error','Debe escoger una categoría para su evento');
                    $this->vista->renderizarVista('editar','editarEvento');    
                    exit;
                }

                if(!$this->getInt('ciudad_evento')){
                    $this->vista->assign('error','Debe escoger una Ciudad para su evento');
                    $this->vista->renderizarVista('editar','editarEvento');    
                    exit;
                }

                if(!$this->getTexto('direccion_evento')){
                    $this->vista->assign('error','Debe Introducir una dirección para su evento');
                    $this->vista->renderizarVista('editar','editarEvento');    
                    exit;
                }

                 if(!$this->getTexto('lugar_evento')){
                    $this->vista->assign('error','Debe Introducir un lugar  para su evento');
                    $this->vista->renderizarVista('editar','editarEvento');    
                    exit;
                }


              date_default_timezone_set('America/Bogota');
              $hoy = date("Y-m-d");
           
             
            if($this->getPostParametro('fecha_ini')<$hoy){
                $this->vista->assign('error','Creo que estás confundio, la fecha de tu evento esta en pasado');
               $this->vista->renderizarVista('editar','editarEvento');    
                exit;
            }
                if(!$this->getPostParametro('fecha_ini')){
                    $this->vista->assign('error','Debe Introducir fecha de inicio para su evento');
                    $this->vista->renderizarVista('editar','editarEvento');    
                    exit;
                }

                 if(!$this->getPostParametro('fecha_fin')){
                    $this->vista->assign('error','Debe Introducir una fecha final  para su evento');
                    $this->vista->renderizarVista('editar','editarEvento');    
                    exit;
                }

                if(!$this->getPostParametro('hora_ini')){
                    $this->vista->assign('error','Debe Introducir hora de inicio para su evento');
                    $this->vista->renderizarVista('editar','editarEvento');    
                    exit;
                }
                
                if(!$this->getPostParametro('hora_fin')){
                    $this->vista->assign('error','Debe Introducir hora final  para su evento');
                    $this->vista->renderizarVista('editar','editarEvento');    
                    exit;
                }

                if(!$this->getInt('tel_evento')){
                    $this->vista->assign('error','Debe Introducir un telefono valido para su evento');
                    $this->vista->renderizarVista('editar','editarEvento');    
                    exit;
                }

                if(!$this->validarEmail($this->getPostParametro('email_evento'))){
                    $this->vista->assign('error', 'La direccion de email es inv&aacute;lida');
                    $this->vista->renderizarVista('editar','editarEvento');    
                    exit;
                }

                if(!$this->getTexto('descripcion_evento')){
                    $this->vista->assign('error','Debe Introducir una descripcion   para su evento');
                    $this->vista->renderizarVista('editar','editarEvento');    
                    exit;
                }
                if(!$this->validarUrl($this->getPostParametro('web_evento'))){
                $this->vista->assign('error', 'La direccion url es inv&aacute;lida');
                $this->vista->renderizarVista('index', 'Crear Evento');
                exit;
            }

                /*
                 * Si la fecha inicial es mayor que la fecga final, asigna error
                 */
                if($this->getPostParametro('fecha_ini')>$this->getPostParametro('fecha_fin')){
                    $this->vista->assign('error','Creo que te confundiste en la fecha, revisa bien! ');
                    $this->vista->renderizarVista('editar','editarEvento');    
                    exit;
                }
                
                /*
                 * Si es el mismo día, y la hora inicial es mayor que la hora final asigne un error.
                 */
                if($this->getPostParametro('fecha_ini')==$this->getPostParametro('fecha_fin')){
                    
                    if($this->getPostParametro('hora_ini')>$this->getPostParametro('hora_fin')){
                    $this->vista->assign('error','¿Estas seguro es la hora correcta?, revisa bien! ');
                    $this->vista->renderizarVista('editar','editarEvento');    
                    exit;
                    
                    }
                }

           
            
            /*
             * Enviamos los datos capturalos al Modelo, para hacer la insercion a la BD
             */
            $this->eventos->editarEvento(
                $id,
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
            
           
            
            
            $this->vista->assign('datos_evento', false);
            $this->vista->assign('evento', false);
            $this->vista->assign('mensaje', ' Enhorabuena!! El evento se edito satisfactoriamente satisfactoriamente!!');

              
                  }

      
                $this->vista->renderizarVista('editar','editarEvento');    
                  
        }
        
        
        
       
         
        
    }
}
