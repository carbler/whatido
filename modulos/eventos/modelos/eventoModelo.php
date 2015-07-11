<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Es el Modelos de los eventos, que se comunica con la Base de datos. 
 *
 * @author carbler
 */
class eventoModelo extends Modelo{
    
    public function __construct() {
        parent::__construct();
        
    }
    
     /**
      * Inserta in evento en la Bd
     * @param int $Usuario Identificador usuario creador del evento
      * @param int $categoria identificador unico de la categoría asosciada al evento
      * @param string $nombre Nombre del evento a crear
      * @param string $direccion Direccion del evento
      * @param String $lugar Nombre del sitio especifico donde se llevara a cabo el evento
      * @param date $fecha_ini Fecha de inicio del evento
      * @param date $fecha_fin Fecha de finalizacion del evento
      * @param time $hora_ini Hora de inicio del evento
      * @param time $hora_fin Hora de finalizacion para el evento
      * @param string $telefono telefono de contacto del evento
      * @param string $website Sitio web del evento 
      * @param string $email correo electronico del evento
      * @param string $descripcion Descripcion textual del evento
     * 
     */
    public function setEvento($usuario,$categoria,$ciudad,$nombre,$direccion,$lugar,$fecha_ini,$fecha_fin,$hora_ini,$hora_fin,$telefono,$website,$email,$descripcion,$valor) {
       
      $this->baseDatos->prepare(
                "call crear_evento(:usuario, :categoria, :ciudad, :nombre, :direccion, :lugar,:fecha_ini ,:fecha_fin ,:hora_ini , :hora_fin, :telefono, :website, :email,:descripcion,:valor)"
                )
                ->execute(array(
                    ':usuario' => $usuario,
                    ':categoria' => $categoria,
                    ':ciudad' => $ciudad,
                    ':nombre' => $nombre,
                    ':direccion' => $direccion,
                     ':lugar' => $lugar,
                     ':fecha_ini' => $fecha_ini,
                     ':fecha_fin' => $fecha_fin,
                     ':hora_ini' => $hora_ini,
                     ':hora_fin' => $hora_fin,
                     ':telefono' => $telefono,
                     ':website' => $website,
                     ':email' => $email,
                     ':descripcion' => $descripcion,
                     ':valor' => $valor,
                    
                    
                ));


    }
    
     /**
     *Verifica la existencia del evento
     * @param Int $evento identificador unico del evento a verificar
     * @return Array con la primera fila de la consulta
     */
    public function verificarEvento($evento)
    {
        $id = $this->baseDatos->query("SELECT nombre FROM vista_eventos WHERE nombre= '".$evento."'");
        return $id->fetch();
    }
    
     /**
     * 
     * @return Array con las categorias de la Bd
     */    
    public function getCategorias(){
        $categorias = $this->baseDatos->query("SELECT * from vista_categoria ORDER BY nombre");
        
        return $categorias->fetchAll();
    }
  
   
    /**
     * 
     * @return Array con la ciudades de la Bd
     */
    public function getCiudades(){
        $ciudad = $this->baseDatos->query("SELECT * from vista_ciudad");
        
        return $ciudad->fetchAll();
    }
    /**
     * 
     * @return Array Departamentos de la Bd
     */
    public function getDepartamentos(){
        return $this->baseDatos->query("SELECT * from vista_departamentos")->fetchAll();
    }
     
     /**
      * Busca en la Bd un evento y lo retorna si lo encuentra
      * @param type $id identificador unico del evento
      * @return string,Array  Si existe el evento retorna un Array con los datos del evento, de lo contrario retorna "error"
      */
     public function getEvento($id) {
          $evento = $this->baseDatos->query("SELECT vista_eventos.* ,vista_eventos.categoria as id_categoria, vista_eventos.ciudad as id_ciudad, vista_categoria.nombre as categoria, vista_ciudad.nombre as ciudad from vista_eventos,vista_categoria,vista_ciudad WHERE vista_eventos.categoria = vista_categoria.id_categoria and vista_eventos.ciudad = vista_ciudad.id_ciudad and id_evento='".$id."'");

         if($evento==FALSE){
            return "error";
        }  else {
             $evento->setFetchMode(PDO::FETCH_ASSOC);
        return $evento->fetchAll();
        }
    }
    
       /**
      * Edita un evento
     * @param int $id Identificador unico del evento a editar
      * @param int $categoria identificador unico de la categoría asosciada al evento
      * @param string $nombre Nombre del evento a crear
      * @param string $direccion Direccion del evento
      * @param String $lugar Nombre del sitio especifico donde se llevara a cabo el evento
      * @param date $fecha_ini Fecha de inicio del evento
      * @param date $fecha_fin Fecha de finalizacion del evento
      * @param time $hora_ini Hora de inicio del evento
      * @param time $hora_fin Hora de finalizacion para el evento
      * @param string $telefono telefono de contacto del evento
      * @param string $website Sitio web del evento 
      * @param string $email correo electronico del evento
      * @param string $descripcion Descripcion textual del evento
     * 
     */
    public function editarEvento($id,$categoria,$ciudad,$nombre,$direccion,$lugar,$fecha_ini,$fecha_fin,$hora_ini,$hora_fin,$telefono,$website,$email,$descripcion,$valor) {
       
      $this->baseDatos->prepare(
                "call editar_evento(:id,:categoria, :ciudad, :nombre, :direccion, :lugar,:fecha_ini ,:fecha_fin ,:hora_ini ,:hora_fin,:telefono,:website,:email,:descripcion,:valor)"
                )
                ->execute(array(
                    ':id'=>$id,
                    ':categoria' => $categoria,
                    ':ciudad' => $ciudad,
                    ':nombre' => $nombre,
                    ':direccion' => $direccion,
                     ':lugar' => $lugar,
                     ':fecha_ini' => $fecha_ini,
                     ':fecha_fin' => $fecha_fin,
                     ':hora_ini' => $hora_ini,
                     ':hora_fin' => $hora_fin,
                     ':telefono' => $telefono,
                     ':website' => $website,
                     ':email' => $email,
                     ':descripcion' => $descripcion,
                     ':valor' => $valor,
                    
                    
                ));
        
    }
    
    /**
     * 
     * @param type $id identificador único del evento a eliminar
     */
    public function deleteEvento($id) {
        
         $evento = $this->baseDatos->query("DELETE FROM `eventos` WHERE id_evento='".$id."'");
    }
    

}
