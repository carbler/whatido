<?php

/**
 * Class Registro
 *
 *  Almacena Clases Compartidas (Utilzadas En Varios Puntos De La Aplicacion), Para Cuand Requieran Ser Utilizadas
 * @atribute  $instancia  objeto del registro
 * @atrubute  $data       clases almacenadas en ekregistro
 */
class Registro
{
    private  static $instancia;
    private  $data;

    /**
     * Patron de diseño silgenton
     * @return Registro instancia de la clase
     */
    public static function getInstancia(){

        if(! self::$instancia instanceof self){
            self::$instancia = new Registro();
        }
        return self::$instancia;
    }


    /**
     * asigna en la data un dato en un array asociativo
     * @param $clave
     * @param $valor
     */
    public function  __set($clave, $valor){
        $this->data[$clave] = $valor;
    }

    /**
     * retorna de la data la clase solicitada o un falso si no existe
     * @param $clave
     * @return bool  si no existe retorna false, si lo esta el objeto contenido referenciado por esa clave
     */
    public function __get($clave){
        if(isset($this->data[$clave])){
            return $this->data[$clave];
        }
        return false;
    }
}
