<?php
/**
 * Created by PhpStorm.
 * User: jr
 * Date: 20/06/2015
 * Time: 09:23 AM
 * 
 * Clase, para la creacion del perfil del usuario
 */

class perfilUsuarioControlador extends Controlador{

    public function __construct(){
        parent::__construct();
        $rutaModelo= ROOT .'modulos' .DS. 'eventos' .DS. 'modelos' .DS. 'eventoModelo.php' ;
        $this->eventos =   $this->importModelo('evento',$rutaModelo);
        $this->vista->setJsPublic(array('funciones'));
        $this->vista->setJs(array('funciones'));
        $this->vista->setCssPublic(array('estilos'));
        $this->perfil= $this->cargarModelo('perfil');
    

    }
    
    /**
     * Método principal para la creacion de perfiles
     */
    public function index(){
        
        /**
         * Guardo en la variable $id el id del usuario logeado
         */
        $id = session::getClaveSession("id_usuario");
       
             //si existe el perfil creado
        if($this->perfil->esPoE($id)!="false"){
            
            $this->redireccionarPagina("usuarios/perfil/info/".$id);
            exit();
        }else{
            
            /**
             * Aignamos los arrays a los combos
             */
             $this->vista->assign('departamentos',$this->eventos->getDepartamentos());
                
             
                 /**
                  * Si es un perfil, como persona
                  */
             
             
                 /*Verifica Datos de la persona*/
                if($this->getInt('persona')==1){
                    $this->vista->assign('datos_persona',$_POST);

                    if(!$this->getTexto('primer_nombre')){
                        $this->vista->assign('error','Debe Introducir un primer nombre');
                         $this->vista->renderizarVista('perfil','perfil usuario');
                        exit;
                    }

          

                     if(!$this->getTexto('primer_apellido')){
                        $this->vista->assign('error','Debe Introducir un primer apellido');
                         $this->vista->renderizarVista('perfil','perfil usuario');
                        exit;
                    }

                      if(!$this->getTexto('segundo_apellido')){
                        $this->vista->assign('error','Debe Introducir un primer apellido');
                         $this->vista->renderizarVista('perfil','perfil usuario');
                        exit;
                    }

                      date_default_timezone_set('America/Bogota');
                      $hoy = date("Y-m-d");
               
                    if($this->getPostParametro('fecha_nac')>$hoy){
                        $this->vista->assign('error','Creo que estás confundio, ¿tu fecha de nacimiento esta en el futuro?');
                      $this->vista->renderizarVista('perfil','perfil usuario');
                        exit;
                    }
                    if(!$this->getPostParametro('fecha_nac')){
                        $this->vista->assign('error','Debe Introducir fecha ');
                       $this->vista->renderizarVista('perfil','perfil usuario');
                        exit;
                    }
                      if(!$this->getPostParametro('genero')){
                        $this->vista->assign('error','Debe Introducir un genero ');
                       $this->vista->renderizarVista('perfil','perfil usuario');
                        exit;
                    }

                      if(!$this->getPostParametro('ocupacion')){
                        $this->vista->assign('error','Debe Introducir ocupacion ');
                       $this->vista->renderizarVista('perfil','perfil usuario');
                        exit;
                    }
                      if(!$this->getPostParametro('ciudad_recidencia')){
                        $this->vista->assign('error','Debe Introducir ciudad ');
                       $this->vista->renderizarVista('perfil','perfil usuario');
                        exit;
                    }




                    if(!$this->getTexto('descripcion')){
                        $this->vista->assign('error','Debe Introducir una descripcion   para su evento');
                      $this->vista->renderizarVista('perfil','perfil usuario');
                        exit;
                    }


                     
                    
                   echo   Session::getClaveSession("id_usuario");
                     echo     $this->getPostParametro('ciudad_recidencia');
                     echo    $this->getTexto('primer_nombre');
                    echo     $this->getTexto('segundo_nombre');
                      echo   $this->getTexto('primer_apellido');
                      echo   $this->getTexto('segundo_apellido');
                      echo   $this->getPostParametro('fecha_nac');
                      echo   $this->getPostParametro('genero');
                     echo    $this->getPostParametro('ocupacion');
                      echo  $this->getTexto('descripcion');


                    /**
                     * Se envía los datos al método completarPerfilPersona del Modelo.
                     */
                    $this->perfil->completarPerfilPersona(
                        Session::getClaveSession("id_usuario"),
                        $this->getPostParametro('ciudad_recidencia'),
                        $this->getTexto('primer_nombre'),
                        $this->getTexto('segundo_nombre'),
                        $this->getTexto('primer_apellido'),
                        $this->getTexto('segundo_apellido'),
                        $this->getPostParametro('fecha_nac'),
                        $this->getPostParametro('genero'),
                        $this->getPostParametro('ocupacion'),
                        $this->getTexto('descripcion')

                    );

                    if(!$this->perfil->verificarPerfilPersona( $this->getTexto('primer_nombre'))){
                       $this->vista->assign('error', 'Error al crear el perfil');
                       $this->vista->renderizarVista('perfil','perfil usuario');
                       exit;
                      }


                    $this->vista->assign('datos_persona', false);
                    $this->redireccionarPagina("usuarios/perfil/info/".$id);
            exit();


                }
                
                
                /**
                 * Si es un perfil empresarial
                 */
                
                 /*Verifica Datos de la empresa*/
                if($this->getInt('empresa')==1){
                    
                    $this->vista->assign('datos_empresa',$_POST);

                    if(!$this->getTexto('nombre')){
                        $this->vista->assign('error','Debe Introducir un  nombre');
                        $this->vista->renderizarVista('perfil','perfil usuario');
                        exit;
                    }

                    if(!$this->getTexto('sigla')){
                        $this->vista->assign('error','Debe Introducir una sigla');
                        $this->vista->renderizarVista('perfil','perfil usuario');
                        exit;
                    }


                    if(!$this->getPostParametro('naturaleza')){
                        $this->vista->assign('error','Debe escoger una naturaleza');
                        $this->vista->renderizarVista('perfil','perfil usuario');
                        exit;
                    }

                    if(!$this->getPostParametro('ubicacion')){
                        $this->vista->assign('error','Debe escoger una ubicacion ');
                        $this->vista->renderizarVista('perfil','perfil usuario');
                        exit;
                    }


                    if(!$this->getTexto('contacto')){
                       $this->vista->assign('error','Debe introducir un nombre del asesor ');
                       $this->vista->renderizarVista('perfil','perfil usuario');
                       exit;
                    }
                    
                    if(!$this->getPostParametro('telefono')){
                       $this->vista->assign('error','Debe Introducir un telefono ');
                       $this->vista->renderizarVista('perfil','perfil usuario');
                       exit;
                    }

                    if(!$this->getPostParametro('celular')){
                       $this->vista->assign('error','Debe Introducir un celular ');
                       $this->vista->renderizarVista('perfil','perfil usuario');
                       exit;
                    }
                    
                    if(!$this->getPostParametro('direccion')){
                       $this->vista->assign('error','Debe Introducir una direccion ');
                       $this->vista->renderizarVista('perfil','perfil usuario');
                       exit;
                    }
                    
                    
                    if(!$this->validarUrl($this->getPostParametro('web_site'))){
                       $this->vista->assign('error','Debe Introducir una direccion web valida');
                       $this->vista->renderizarVista('perfil','perfil usuario');
                       exit;
                    }

                    if(!$this->getTexto('descripcion')){
                       $this->vista->assign('error','Debe Introducir una descripcion ');
                       $this->vista->renderizarVista('perfil','perfil usuario');
                       exit;
                    }


                  

                    /**
                     * Enviamos los datos al metodo completarPerfilEmpresa
                     */
                    $this->perfil->completarPerfilEmpresa(
                        Session::getClaveSession("id_usuario"),
                        $this->getPostParametro('ubicacion'),
                        $this->getTexto('nombre'),
                        $this->getTexto('sigla'),
                        $this->getPostParametro('naturaleza'),
                        $this->getPostParametro('direccion'),
                        $this->getTexto('contacto'),
                        $this->getPostParametro('telefono'),
                        $this->getPostParametro('celular'),
                        $this->getPostParametro('web_site'),
                        $this->getTexto('descripcion')

                    );
                             
                     
                      if(!$this->perfil->verificarPerfilEmpresa( $this->getTexto('nombre'))){
                       $this->vista->assign('error', 'Error al crear el perfil');
                       $this->vista->renderizarVista('perfil','perfil usuario');
                       exit;
                      }


                    $this->vista->assign('datos_empresa', false);
                    $this->redireccionarPagina("usuarios/perfil/info/".$id);
                    exit();


                }
        
           $this->vista->renderizarVista('perfil','perfil usuario');
        }
        
      
        

    }
}