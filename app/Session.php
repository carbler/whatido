<?php
/**
 * clase Session
 *
 * Esta Clase se encarga de manejar variables de SESSION dentro de la aplicacion
 *
 * @author    Jose Ricardo Pedraza  < jr091291@gmail.com >
/**/

class Session 
{
    /**
     * inicializa un session en el servidor
     */
    public static function iniciarSession(){
        session_start();
    }

    /**
     * destruye la session en el servidor
     */
    public static function destruirSession(){
        session_destroy();
    }

    /**destruye las claves de session enviadas en el array
     * @param array $clave   valor clave de session
     */
    public static function destruirClavesSession($clave){
            if( ! is_array($clave)){
                if(isset($_SESSION[$clave])){
                    unset($_SESSION[$clave]);
                }
            }else{
                for($i = 0; $i < count($clave); $i++){
                    if(isset($_SESSION[$clave[$i]])){
                        unset($_SESSION[$clave[$i]]);
                    }
                }
            }
    }

    /**
     * crear variables de session
     * @param $clave     nombre clave de session
     * @param $valor    valor para la clave
     */
    public static function setVariableSession($clave,$valor)
    {
        if(!empty($clave)){
            $_SESSION[$clave]=$valor;
        }
    }

    /**
     * obtener variables de session
     * @param $clave     nombre clave de session
     * @return $valor    valor para la clave si n o  retorna un false
     */
    public static function getClaveSession($clave){
        if(isset($_SESSION[$clave])){
            return $_SESSION[$clave];
        }
        return false;
    }

    /**
     * funcion de control de acceso
     */
    public static function acceso()
    {
        if(!Session::getClaveSession('autenticado')){
            header('location:' . BASE_URL . 'error/acceso/5050');
            exit;
        }

    }
    
    public static function accesoView($nivelAceso)
    {
        if(!Session::getClaveSession('autenticado')){
            return false;
        }
        return true;
    }

    
    public static function tiempoSession()
    {
        if(!Session::getClaveSession('tiempo') || ! defined('SESSION_TIME')){
            throw new Exception("No Se Ha Definido Tiempo De Session");
        }
        
        if(SESSION_TIME==0){
            return;
        }
        
        if(time()-Session::getClaveSession('tiempo')>(SESSION_TIME*60)){
            Session::destruirSession();
            header('location:' .BASE_URL . 'error/acceso/8080');
        }
        else{
            Session::setVariableSession('tiempo', time());
        }
    }
}

