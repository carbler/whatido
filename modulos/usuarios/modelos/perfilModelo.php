<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of perfilModelo
 *
 * @author carbler
 */
class perfilModelo extends Modelo{
    
    public function __construct() {
        parent::__construct();
    }
    
    /**
     * Funcion para crear un nuevo perfil como "Persona"
     * 
     * @param int $usuario  identificador unico del usuario creador del perfil
     * @param int $recidencia   identificador unico ciudad de residencia
     * @param text $nombre1     Primer Nombre   
     * @param text $nombre2     Segundo Nombre
     * @param text $apellido1   Primero Apellido
     * @param text $apellido2   Segundo Apellido
     * @param date $fecha_nac   Fecha de Nacimiento
     * @param text $genero      Genero 
     * @param text $ocupacion   Ocupacion 
     * @param text $descripcion  Descripcion personal
     */
    public function completarPerfilPersona($usuario, $recidencia,$nombre1,$nombre2,$apellido1,$apellido2,$fecha_nac,$genero,$ocupacion,$descripcion)
    {
         
      $this->baseDatos->prepare(
                "CALL crear_perfil_persona(:usuario, :recidencia, :nombre1, :nombre2, :apellido1, :apellido2,:fecha_nac ,:genero ,:ocupacion , :descripcion)"
                )
                ->execute(array(
                    ':usuario' => $usuario,
                    ':recidencia' => $recidencia,
                    ':nombre1' => $nombre1,
                    ':nombre2' => $nombre2,
                    ':apellido1' => $apellido1,
                     ':apellido2' => $apellido2,
                     ':fecha_nac' => $fecha_nac,
                     ':genero' => $genero,
                     ':ocupacion' => $ocupacion,
                     ':descripcion' => $descripcion
                     ));
    }
    
        public function completarPerfilEmpresa($usuario, $ubicacion,$nombre,$sigla,$naturaleza,$direccion,$nombre_contacto,$telefono,$cel,$web_site,$descripcion)
    {
          
         
      $this->baseDatos->prepare(
                "CALL crear_perfil_empresa(:usuario, :ubicacion, :nombre, :sigla, :naturaleza, :direccion,:nombre_contacto,:telefono ,:cel ,:web_site , :descripcion)"
                )
                ->execute(array(
                    ':usuario' => $usuario,
                    ':ubicacion' => $ubicacion,
                    ':nombre' => $nombre,
                    ':sigla' => $sigla,
                    ':naturaleza' => $naturaleza,
                     ':direccion' => $direccion,
                     ':nombre_contacto' => $nombre_contacto,
                     ':telefono' => $telefono,
                     ':cel' => $cel,
                     ':web_site' => $web_site,
                     ':descripcion' => $descripcion
                     
                    
                    
                ));
    }
    
    
      /**
     * Funcion para crear un nuevo perfil como "Persona"
     * 
     * 
     * @param int $recidencia   identificador unico ciudad de residencia
     * @param text $nombre1     Primer Nombre   
     * @param text $nombre2     Segundo Nombre
     * @param text $apellido1   Primero Apellido
     * @param text $apellido2   Segundo Apellido
     * @param date $fecha_nac   Fecha de Nacimiento
     * @param text $genero      Genero 
     * @param text $ocupacion   Ocupacion 
     * @param text $descripcion  Descripcion personal
     */
    public function editarPerfilPersona($usuario,$recidencia,$nombre1,$nombre2,$apellido1,$apellido2,$fecha_nac,$genero,$ocupacion,$descripcion)
    {
         
      $this->baseDatos->prepare(
                "CALL editar_perfil_persona(:usuario,:recidencia,:nombre1,:nombre2,:apellido1,:apellido2,:fecha_nac,:genero,:ocupacion,:descripcion)"
                )
                ->execute(array(
                     ':usuario' => $usuario,
                    ':recidencia' => $recidencia,
                    ':nombre1' => $nombre1,
                    ':nombre2' => $nombre2,
                    ':apellido1' => $apellido1,
                     ':apellido2' => $apellido2,
                     ':fecha_nac' => $fecha_nac,
                     ':genero' => $genero,
                     ':ocupacion' => $ocupacion,
                     ':descripcion' => $descripcion
                     ));
    }
    
       public function editarPerfilEmpresa($usuario, $ubicacion,$nombre,$sigla,$naturaleza,$direccion,$contacto,$telefono,$cel,$web_site,$descripcion)
    {
     
      $this->baseDatos->prepare(
                "CALL editar_perfil_empresa(:usuario,:ubicacion,:nombre,:sigla,:naturaleza,:direccion,:contacto,:telefono,:cel ,:web_site,:descripcion)"
                )
                ->execute(array(
                   ':usuario' => $usuario,
                    ':ubicacion' => $ubicacion,
                    ':nombre' => $nombre,
                    ':sigla' => $sigla,
                    ':naturaleza' => $naturaleza,
                     ':direccion' => $direccion,
                     ':contacto' => $contacto,
                     ':telefono' => $telefono,
                     ':cel' => $cel,
                     ':web_site' => $web_site,
                     ':descripcion' => $descripcion
                     ));
    }
    
    /**
     * Método para verificar la existencia de un perfil personal
     *
     * @param type $primer_nombre  primer nombre de perfil personal a verificar
     * @return type
     */
     public function verificarPerfilPersona($primer_nombre) {
          $persona = $this->baseDatos->query("SELECT * from vista_persona WHERE   nombre1='".$primer_nombre."'");
        
     return $persona->fetch();
         
        
    }
    
    /**
     * Método para verificar la existencia de un perfil empresarial
     * @param type $nombre
     * @return type
     */
      public function verificarPerfilEmpresa($nombre) {
          $empresa = $this->baseDatos->query("SELECT * from vista_empresa WHERE  nombre='".$nombre."'");
        
       return $empresa->fetch();
         
        
    }
    /**
     * Método para obtener todos los datos de un perfil personal
     * @param type $id identificador unico del perfil personal
     * @return type array
     */
     public function getPerfilPersona($id) {
          $persona = $this->baseDatos->query("SELECT vista_persona.*, vista_ciudad.nombre as ciudad from vista_persona,vista_ciudad WHERE  vista_persona.recidencia = vista_ciudad.id_ciudad and usuario='".$id."'");
        return $persona->fetchAll();
        
    }
    
  
    /**
     * método para obtener todos los datos de un perfil empresarial
     * @param type $id identificador unico de un perfil empresarial
     * @return type array
     */
      public function getPerfilEmpresa($id) {
          $empresa = $this->baseDatos->query("SELECT vista_empresa.*, vista_ciudad.nombre as ciudad from vista_empresa,vista_ciudad WHERE vista_empresa.ubicacion = vista_ciudad.id_ciudad and usuario='".$id."'");
        
        return $empresa->fetchAll();
        
    }
    
    /**
     * método que verifica si el usuario creó un perfil empresarial o personal
     * @param type $id identificador unico del usuario
     * @return string 
     */
     public function esPoE($id) {
          $persona = $this->baseDatos->query("SELECT * from vista_persona WHERE  usuario='".$id."'");
          $empresa = $this->baseDatos->query("SELECT *  from vista_empresa WHERE  usuario='".$id."'");
          
        
      if(!$persona->fetchAll()){
          
          if(!$empresa->fetchAll()){
              return "false";
          }
          
          return "empresa";
     }    
      
     return "persona";
       
    }
    
    /**
     * Metodo que me permite conocer los eventos de un usuario en particular
     * 
     * @param type $id identificador unico del usuario 
     * @return string,Array 
     */
      public function getEventosUsuario($id){ 
        $eventos= $this->baseDatos->query(
                "SELECT vista_eventos.*,vista_categoria.nombre as categoria, vista_ciudad.nombre as ciudad FROM vista_eventos,vista_categoria,vista_ciudad WHERE vista_eventos.categoria = vista_categoria.id_categoria and vista_eventos.ciudad = vista_ciudad.id_ciudad and usuario = '{$id}'"
          
        );

        if($eventos==FALSE){
            return "error";
        }  else {
             $eventos->setFetchMode(PDO::FETCH_ASSOC);
        return $eventos->fetchAll();
        }
       
    }
    
}
