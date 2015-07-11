<?php

/**
 * clase Bootstrap (de arranque)
 *
 * Esta Clase se encarga de correr la aplicacion, haciendo un llamado al controlador y al metodo solicitado
 * en la peticion (REQUEST) y verificando que las rutas solicitadas existan y sean validas, ya sea para
 * arrancar un modulo de la aplicacion, o una solicitud
 *
 * @author    Jose Ricardo Pedraza  < jr091291@gmail.com >
/**/

class Bootstrap
{
    protected $peticion;

    /**
     * constructor clase (Bootstrap)
     * @param Peticion $peticion    objeto con la informacion de la peticion solicitada al servidor
     * @throws Exception
     */
    function __construct(Peticion $peticion)
    {
        $this->peticion = $peticion;
        $this->arrancar();
    }

    /**
     * arrancar
     *
     * se encarga de llamar al metodo del controlador solicitado
     *
     * @var String $modulo          variable que almacena nombre del modulo solicitado en el (Request)
     * @var String $controlador     variable que almacena nombre del controlador solicitado en el (Request)
     * @var String $metodo          variable que almacena nombre del metodo solicitado en el (Request)
     * @var Array $argumentos       array que almacena los argumentos del metodo solicitado
     * @thowExepction               si la clase o el archivo del modulo o del controlador no se puede acceder se lanza
     *                              un exepcion
     */
    protected function arrancar()
    {
        $modulo      = $this->peticion->getModulo();
        $metodo      = $this->peticion->getMetodo();
        $argumentos  = $this->peticion->getArgumentos();
        $controlador = $this->peticion->getControlador() . 'Controlador';

        if( !$modulo ) {
            $ruta_controlador = self::asignarRutaControlador($controlador);
        }
        else {

            $ruta_modulo = self::asignarRutaModulo($modulo);

            if( ! is_readable($ruta_modulo)) {
                throw new Exception("Se Ha Intentando Cargar Un Modulo Inexistente");
            }
            else{
                require_once $ruta_modulo;
                $ruta_controlador = self::asignarRutaControladorModulo( $modulo , $controlador);
            }
        }


        if(! is_readable($ruta_controlador)){
            throw new Exception('La Ruta Solicitada No Se Ha Encontrado');
        }
        else {
            require_once $ruta_controlador;
            $controler = new $controlador;

            if( !is_callable( array( $controler, $metodo ) )) {
                $this->metodo = 'index';
            }

            if( isset($argumentos) ){
                call_user_func_array( array($controler ,$metodo) , $argumentos );
            }
            else{
                call_user_func(array($controlador,$metodo));
            }
        }
    }

    /**
     * Asigna la ruta del archivo del controlador del modulo dentro de la aplicacion
     *
     * @param  String $modulo   nombre del modulo solicitado en la Peticion (modulo/controlador/metodo/argumentos)
     * @return string           ruta  archivo
     */
    protected static function asignarRutaModulo($modulo){
        return  ROOT. 'controladores' .DS. $modulo .'Controlador.php';
    }

    /**
     * Asigna la ruta del archivo del controlador del modulo solicitado dentro de la aplicacion
     *
     * @param $modulo         nombre del modulo solicitado  en la Peticion (modulo/controlador/metodo/argumentos)
     * @param $controlador    nombre del controlador solicitado en la Peticion
     * @return string         ruta del archivo del controlador
     */
    protected static function asignarRutaControladorModulo($modulo , $controlador){
        return ROOT . 'modulos' .DS. $modulo .DS. 'controladores' .DS. $controlador .'.php';
    }

    /**
     * signa la ruta del archivo del controlador dentro de la aplicacion
     *
     * @param $controlador  nombre del controlador solicitado en la Peticion (controlador/metodo/argumentos)
     * @return string       ruta del archivo del controlador dentro de la aplicacion
     */
    protected static function asignarRutaControlador($controlador) {
        return ROOT. 'controladores' .DS. $controlador . '.php';
    }


}
