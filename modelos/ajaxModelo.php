<?php
/**
 * Created by PhpStorm.
 * User: jr
 * Date: 09/06/2015
 * Time: 05:40 PM
 */

class ajaxModelo extends Modelo
{

    public function __construct(){
        parent::__construct();
    }
     
    
    /**
     * 
     * @return Array Asociativo con los eventos del día
     */
    public function getEventosdeldia(){
    
        date_default_timezone_set('America/Bogota');
        $fecha = date("Y-m-d");
        
        
        $eventos= $this->baseDatos->query(
                "SELECT vista_eventos.id_evento,vista_eventos.usuario, vista_eventos.nombre,vista_eventos.lugar,vista_eventos.fecha_ini,vista_categoria.nombre as categoria FROM vista_eventos, vista_categoria WHERE vista_eventos.categoria = vista_categoria.id_categoria and fecha_ini <= '{$fecha}' and fecha_fin >='{$fecha}' ORDER BY fecha_ini"
          
        );

        if($eventos==FALSE){
            return "error";
        }  else {
             $eventos->setFetchMode(PDO::FETCH_ASSOC);
        return $eventos->fetchAll();
        }
       
    }
   
    /**
     *  @param Int $id_usuario 
     * @return Array Asociativo con los eventos del usuario
     */
     public function getEventosUsuario($id_usuario){
        $eventos= $this->baseDatos->query(
                "SELECT * FROM vista_eventos WHERE usuario = '{$id_usuario}'"
          
        );

        if($eventos==FALSE){
            return "error";
        }  else {
             $eventos->setFetchMode(PDO::FETCH_ASSOC);
        return $eventos->fetchAll();
        }
       
    }
    
    
     /**
     *  @param  $ciudad
     *  @param  $categoria
     *  @param  $fecha
     *  @param  $gratis
     * @return Array Asociativo con todos los eventos, segun los parametros enviados. 
     */
     public function getEventosIndex($ciudad,$categoria,$fecha,$gratis){

    if($ciudad=="false"){
            if($categoria=="false"){
                             if($fecha=="false"){
                                                    if($gratis==1){
                                                                      $eventos= $this->baseDatos->query(
                                                                      "SELECT vista_eventos.id_evento,vista_eventos.usuario, vista_eventos.nombre,vista_eventos.lugar,vista_eventos.fecha_ini,vista_eventos.descripcion,vista_categoria.nombre as categoria FROM vista_eventos, vista_categoria WHERE vista_eventos.categoria = vista_categoria.id_categoria and valor = 0"

                                                                    );
                                                          
                                                      }else{
                                                                      $eventos= $this->baseDatos->query(
                                                                      "SELECT vista_eventos.id_evento,vista_eventos.usuario, vista_eventos.nombre,vista_eventos.lugar,vista_eventos.fecha_ini,vista_eventos.descripcion,vista_categoria.nombre as categoria FROM vista_eventos, vista_categoria WHERE vista_eventos.categoria = vista_categoria.id_categoria"

                                                                    );

                                                        }
                            }else {
                                
                                                      if($gratis==1){
                                                                      $eventos= $this->baseDatos->query(
                                                                      "SELECT vista_eventos.id_evento,vista_eventos.usuario, vista_eventos.nombre,vista_eventos.lugar,vista_eventos.fecha_ini,vista_eventos.descripcion,vista_categoria.nombre as categoria FROM vista_eventos, vista_categoria WHERE fecha_ini <= '{$fecha}' and fecha_fin >='{$fecha}' and vista_eventos.categoria = vista_categoria.id_categoria and valor = 0"

                                                                    );
                                                          
                                                      }else{
                                                                      $eventos= $this->baseDatos->query(
                                                                      "SELECT vista_eventos.id_evento,vista_eventos.usuario, vista_eventos.nombre,vista_eventos.lugar,vista_eventos.fecha_ini,vista_eventos.descripcion,vista_categoria.nombre as categoria FROM vista_eventos, vista_categoria WHERE fecha_ini <= '{$fecha}' and fecha_fin >='{$fecha}' and vista_eventos.categoria = vista_categoria.id_categoria"

                                                                    );

                                                        }

                            }
            }else{
                                            if($fecha=="false"){
                                                    if($gratis==1){
                                                                      $eventos= $this->baseDatos->query(
                                                                      "SELECT vista_eventos.id_evento,vista_eventos.usuario, vista_eventos.nombre,vista_eventos.lugar,vista_eventos.fecha_ini,vista_eventos.descripcion,vista_categoria.nombre as categoria FROM vista_eventos, vista_categoria WHERE vista_eventos.categoria = vista_categoria.id_categoria and valor = 0 and categoria='{$categoria}'"

                                                                    );
                                                          
                                                      }else{
                                                                      $eventos= $this->baseDatos->query(
                                                                      "SELECT vista_eventos.id_evento,vista_eventos.usuario, vista_eventos.nombre,vista_eventos.lugar,vista_eventos.fecha_ini,vista_eventos.descripcion,vista_categoria.nombre as categoria FROM vista_eventos, vista_categoria WHERE vista_eventos.categoria = vista_categoria.id_categoria and categoria='{$categoria}'"

                                                                    );

                                                        }
                            }else {
                                
                                                      if($gratis==1){
                                                                      $eventos= $this->baseDatos->query(
                                                                      "SELECT vista_eventos.id_evento,vista_eventos.usuario, vista_eventos.nombre,vista_eventos.lugar,vista_eventos.fecha_ini,vista_eventos.descripcion,vista_categoria.nombre as categoria FROM vista_eventos, vista_categoria WHERE fecha_ini <= '{$fecha}' and fecha_fin >='{$fecha}' and vista_eventos.categoria = vista_categoria.id_categoria and valor = 0 and categoria='{$categoria}'"

                                                                    );
                                                          
                                                      }else{
                                                                      $eventos= $this->baseDatos->query(
                                                                      "SELECT vista_eventos.id_evento,vista_eventos.usuario, vista_eventos.nombre,vista_eventos.lugar,vista_eventos.fecha_ini,vista_eventos.descripcion,vista_categoria.nombre as categoria FROM vista_eventos, vista_categoria WHERE fecha_ini <= '{$fecha}' and fecha_fin >='{$fecha}' and vista_eventos.categoria = vista_categoria.id_categoria and categoria='{$categoria}'"

                                                                    );

                                                        }

                            }

            }
    }else{
        
                     if($categoria=="false"){
                             if($fecha=="false"){
                                                    if($gratis==1){
                                                                      $eventos= $this->baseDatos->query(
                                                                      "SELECT vista_eventos.id_evento,vista_eventos.usuario, vista_eventos.nombre,vista_eventos.lugar,vista_eventos.fecha_ini,vista_eventos.descripcion,vista_categoria.nombre as categoria FROM vista_eventos, vista_categoria WHERE vista_eventos.categoria = vista_categoria.id_categoria and valor = 0 and ciudad= '{$ciudad}'"

                                                                    );
                                                          
                                                      }else{
                                                                      $eventos= $this->baseDatos->query(
                                                                      "SELECT vista_eventos.id_evento,vista_eventos.usuario, vista_eventos.nombre,vista_eventos.lugar,vista_eventos.fecha_ini,vista_eventos.descripcion,vista_categoria.nombre as categoria FROM vista_eventos, vista_categoria WHERE vista_eventos.categoria = vista_categoria.id_categoria and ciudad= '{$ciudad}'"

                                                                    );

                                                        }
                            }else {
                                
                                                      if($gratis==1){
                                                                      $eventos= $this->baseDatos->query(
                                                                      "SELECT vista_eventos.id_evento,vista_eventos.usuario, vista_eventos.nombre,vista_eventos.lugar,vista_eventos.fecha_ini,vista_eventos.descripcion,vista_categoria.nombre as categoria FROM vista_eventos, vista_categoria WHERE fecha_ini <= '{$fecha}' and fecha_fin >='{$fecha}' and vista_eventos.categoria = vista_categoria.id_categoria and valor = 0 and ciudad= '{$ciudad}'"

                                                                    );
                                                          
                                                      }else{
                                                                      $eventos= $this->baseDatos->query(
                                                                      "SELECT vista_eventos.id_evento,vista_eventos.usuario, vista_eventos.nombre,vista_eventos.lugar,vista_eventos.fecha_ini,vista_eventos.descripcion,vista_categoria.nombre as categoria FROM vista_eventos, vista_categoria WHERE fecha_ini <= '{$fecha}' and fecha_fin >='{$fecha}' and vista_eventos.categoria = vista_categoria.id_categoria and ciudad= '{$ciudad}'"

                                                                    );

                                                        }

                            }
            }else{
                                            if($fecha=="false"){
                                                    if($gratis==1){
                                                                      $eventos= $this->baseDatos->query(
                                                                      "SELECT vista_eventos.id_evento,vista_eventos.usuario, vista_eventos.nombre,vista_eventos.lugar,vista_eventos.fecha_ini,vista_eventos.descripcion,vista_categoria.nombre as categoria FROM vista_eventos, vista_categoria WHERE vista_eventos.categoria = vista_categoria.id_categoria and valor = 0 and categoria='{$categoria}' and ciudad= '{$ciudad}'"

                                                                    );
                                                          
                                                      }else{
                                                                      $eventos= $this->baseDatos->query(
                                                                      "SELECT vista_eventos.id_evento,vista_eventos.usuario, vista_eventos.nombre,vista_eventos.lugar,vista_eventos.fecha_ini,vista_eventos.descripcion,vista_categoria.nombre as categoria FROM vista_eventos, vista_categoria WHERE vista_eventos.categoria = vista_categoria.id_categoria and categoria='{$categoria}' and ciudad= '{$ciudad}'"

                                                                    );

                                                        }
                            }else {
                                
                                                      if($gratis==1){
                                                                      $eventos= $this->baseDatos->query(
                                                                      "SELECT vista_eventos.id_evento,vista_eventos.usuario, vista_eventos.nombre,vista_eventos.lugar,vista_eventos.fecha_ini,vista_eventos.descripcion,vista_categoria.nombre as categoria FROM vista_eventos, vista_categoria WHERE fecha_ini <= '{$fecha}' and fecha_fin >='{$fecha}' and vista_eventos.categoria = vista_categoria.id_categoria and valor = 0 and categoria='{$categoria}' and ciudad= '{$ciudad}'"

                                                                    );
                                                          
                                                      }else{
                                                                      $eventos= $this->baseDatos->query(
                                                                      "SELECT vista_eventos.id_evento,vista_eventos.usuario, vista_eventos.nombre,vista_eventos.lugar,vista_eventos.fecha_ini,vista_eventos.descripcion,vista_categoria.nombre as categoria FROM vista_eventos, vista_categoria WHERE fecha_ini <= '{$fecha}' and fecha_fin >='{$fecha}' and vista_eventos.categoria = vista_categoria.id_categoria and categoria='{$categoria}' and ciudad= '{$ciudad}'"

                                                                    );

                                                        }

                            }

            }
    }
              
        

        if($eventos==FALSE){
            return "error";
        }  else {
             $eventos->setFetchMode(PDO::FETCH_ASSOC);
        return $eventos->fetchAll();
        }
       
    }
    
    
     /**
     *  @param  $departamento
     * @return Array  con todas las ciudades de un departamento en especifico
     */
    public  function getCiudadPorDepartamento($departamento){
        $ciudades= $this->baseDatos->query("SELECT vista_ciudad.id_ciudad,vista_ciudad.nombre FROM vista_ciudad, vista_departamentos WHERE vista_ciudad.departamento = vista_departamentos.id_departamento and vista_departamentos.id_departamento = ".$departamento);
        return $ciudades->fetchAll();
    }
}