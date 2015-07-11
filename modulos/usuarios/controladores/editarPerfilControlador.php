<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Clase que permite la edicion del perfil del usuario
 *
 * @author carbler
 */
class editarPerfilControlador extends usuariosControlador {
  
 private $usuario;
    /**
     * Asignamos los Javascript y los Css a la vista, e instanciamos la Clase eventoModelo, y perfilModelo
     */
    public function __construct(){
        parent::__construct();
        $rutaModelo= ROOT .'modulos' .DS. 'eventos' .DS. 'modelos' .DS. 'eventoModelo.php' ;
        $this->eventos =   $this->importModelo('evento',$rutaModelo);
        $this->vista->setJsPublic(array('funciones'));
  
        $this->vista->setCssPublic(array('estilos'));
        $this->perfil= $this->cargarModelo('perfil');
        
        /**
         * Guardamos en la Variable $usuario el id del usuario logeado, para posteriores comparaciones 
         */
        if (!session::getClaveSession("autenticado")) {
            $this->usuario= 0;
        }else{
            $this->usuario = session::getClaveSession("id_usuario");
        }

     
    }
    
    
    /**
     * 
     * @param type $id identificador unico del usuario que desea ediar su perfil
     */
    public function edit($id) {
         $this->vista->assign('titulo','Editar pefil');
            
         
       // armado vista persona
        if($this->perfil->esPoE($id)=="persona"){
            
            //verificamos que el usuario logeado edite su propio perfil y no otro
            if($this->usuario==$id){
                
                
                 $this->vista->setJs(array('funciones'));
                 $this->vista->assign('perfil',$this->perfil->getPerfilPersona($id)); 
                 $this->vista->assign('departamentos',$this->eventos->getDepartamentos());
              
             
              /*Verifica Datos de la persona*/
                if($this->getInt('editar_persona')==1){
                   
                    
                    $this->vista->assign('datos_persona',$_POST);

                    if(!$this->getTexto('primer_nombre')){
                        $this->vista->assign('error','Debe Introducir un primer nombre');
                        $this->vista->renderizarVista('editarPersona','editar persona');
                        exit;
                    }

                  

                    if(!$this->getTexto('primer_apellido')){
                        $this->vista->assign('error','Debe Introducir un primer apellido');
                        $this->vista->renderizarVista('editarPersona','editar persona');
                        exit;
                    }

                    if(!$this->getTexto('segundo_apellido')){
                        $this->vista->assign('error','Debe Introducir un primer apellido');
                        $this->vista->renderizarVista('editarPersona','editar persona');
                        exit;
                    }

                    date_default_timezone_set('America/Bogota');
                      $hoy = date("Y-m-d");
               
                    if($this->getPostParametro('fecha_nac')>$hoy){
                        $this->vista->assign('error','Creo que estás confundio, ¿tu fecha de nacimiento esta en el futuro?');
                      $this->vista->renderizarVista('editarPersona','editar persona');
                        exit;
                    }
                    if(!$this->getPostParametro('fecha_nac')){
                        $this->vista->assign('error','Debe Introducir fecha ');
                        $this->vista->renderizarVista('editarPersona','editar persona');
                        exit;
                    }
                   
                    if(!$this->getPostParametro('genero')){
                        $this->vista->assign('error','Debe Introducir un genero ');
                        $this->vista->renderizarVista('editarPersona','editar persona');
                        exit;
                    }

                   
                    if(!$this->getPostParametro('ocupacion')){
                        $this->vista->assign('error','Debe Introducir ocupacion ');
                        $this->vista->renderizarVista('editarPersona','editar persona');
                        exit;
                    }
                   
                    if(!$this->getPostParametro('recidencia')){
                        $this->vista->assign('error','Debe Introducir ciudad ');
                         $this->vista->renderizarVista('editarPersona','editar persona');
                        exit;
                    }




                    if(!$this->getTexto('descripcion')){
                        $this->vista->assign('error','Debe Introducir una descripcion  ');
                        $this->vista->renderizarVista('editarPersona','editar persona');
                        exit;
                    }

             
                     
                            
                    /**
                     * Enviamos los datos al metodo de edicion del perfil persona
                     */
                    $this->perfil->editarPerfilPersona(
                         session::getClaveSession("id_usuario"),   
                        $this->getPostParametro('recidencia'),
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
                       $this->vista->renderizarVista('editarPersona','editar persona');
                       exit;
                      }


                    $this->vista->assign('datos_persona', false);
                    $this->vista->assign('perfil', false);
                    $this->vista->assign('mensaje', ' Enhorabuena!! El perfil ha sido modificado satisfactoriamente!!');



                }
             
             $this->vista->renderizarVista('editarPersona','editar persona');
             
            }else{
                   $this->redireccionarPagina('error/infoperfil/7070');
            }
               
             
        }
           // armado vista empresa
        if($this->perfil->esPoE($id)=="empresa"){
             
            // //verificamos que el usuario logeado edite su propio perfil y no otro
            if($this->usuario==$id){
                  
                  
                        $this->vista->setJs(array('empresa')); 
             $this->vista->assign('perfil',$this->perfil->getPerfilEmpresa($id)); 
              $this->vista->assign('departamentos',$this->eventos->getDepartamentos());
            
               if($this->getInt('editar_empresa')==1){
                    $this->vista->assign('datos_empresa',$_POST);

                    if(!$this->getTexto('nombre')){
                        $this->vista->assign('error','Debe Introducir un  nombre');
                        $this->vista->renderizarVista('editarEmpresa','editar empresa');
                        exit;
                    }

                    if(!$this->getTexto('sigla')){
                        $this->vista->assign('error','Debe Introducir una sigla');
                        $this->vista->renderizarVista('editarEmpresa','editar empresa');
                        exit;
                    }


                     if(!$this->getPostParametro('naturaleza')){
                        $this->vista->assign('error','Debe escoger una naturaleza');
                        $this->vista->renderizarVista('editarEmpresa','editar empresa');
                        exit;
                    }
                    
                

                    if(!$this->getPostParametro('ubicacion')){
                        $this->vista->assign('error','Debe escoger una ubicacion ');
                        $this->vista->renderizarVista('editarEmpresa','editar empresa');
                        exit;
                    }


                    if(!$this->getTexto('contacto')){
                        $this->vista->assign('error','Debe introducir un nombre del asesor ');
                        $this->vista->renderizarVista('editarEmpresa','editar empresa');
                        exit;
                    }
                    
                    if(!$this->getPostParametro('telefono')){
                        $this->vista->assign('error','Debe Introducir un telefono ');
                        $this->vista->renderizarVista('editarEmpresa','editar empresa');
                        exit;
                    }

                    if(!$this->getPostParametro('celular')){
                        $this->vista->assign('error','Debe Introducir un celular ');
                        $this->vista->renderizarVista('editarEmpresa','editar empresa');
                        exit;
                    }
                    
                    if(!$this->getPostParametro('direccion')){
                       $this->vista->assign('error','Debe Introducir una direccion ');
                       $this->vista->renderizarVista('editarEmpresa','editar empresa');
                       exit;
                    }
                    
                    
                    if(!$this->validarUrl($this->getPostParametro('web_site'))){
                       $this->vista->assign('error','Debe Introducir una direccion de url valida');
                       $this->vista->renderizarVista('editarEmpresa','editar empresa');
                       exit;
                     }
                    
                    
                    if(!$this->validarUrl($this->getPostParametro('web_site'))){
                       $this->vista->assign('error', 'La direccion url es invalida');
                       $this->vista->renderizarVista('editarEmpresa','editar empresa');
                       exit;
                    }

                    if(!$this->getTexto('descripcion')){
                        $this->vista->assign('error','Debe Introducir una descripcion ');
                        $this->vista->renderizarVista('editarEmpresa','editar empresa');
                        exit;
                    }


                 

                     /**
                      * Enviamos los datos de la empresa, al metodo que permite la edicion del perfil
                      */
                    $this->perfil->editarPerfilEmpresa(
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
                      $this->vista->renderizarVista('editarEmpresa','editar empresa');
                       exit;
                      }


                    $this->vista->assign('datos_empresa', false);
                      $this->vista->assign('perfil', false);
                    $this->vista->assign('mensaje', ' Enhorabuena!! El perfil a sido completado satisfactoriamente!!');



                }
                
                
                $this->vista->renderizarVista('editarEmpresa','editar empresa');
              }else{
                  /**
                   * Armado vista usuario inválido
                   */
                     $this->redireccionarPagina('error/infoperfil/7070');
              }
            
        }
           // armado vista usuario no encontrado
        if($this->perfil->esPoE($id)=="false"){
              $this->redireccionarPagina('error/infoperfil/7070');
        }
        
          
    }
}
