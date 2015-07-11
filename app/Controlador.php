<?php

/**
 * clase Controlador (de arranque)
 *
 * Esta Clase es la base de todos los controladores
 * en la peticion (REQUEST) y verificando que las rutas solicitadas existan y sean validas, ya sea para
 * arrancar un modulo de la aplicacion, o una solicitud
 *
 * @author    Jose Ricardo Pedraza  < jr091291@gmail.com >
/**/
abstract class Controlador 
{
    private   $registro;
    protected $vista;
    protected $peticion;


    /**
     * constructor clase (Controlador)
     */
    public function __construct(){
        $this->registro          = Registro::getInstancia();
        $this->peticion          = $this->registro->peticion;
        $this->vista             = new Vista( $this->peticion);
    }

    /**
     * Definimos El Metodo Por Defecto index Para Cada Controlador Que Extienda De Esta Clase
     */
    abstract public function index();


    /**
     * @param string $modelo
     * @param bool $modulo
     * @return string
     * @throws Exception
     */
    protected function cargarModelo($modelo , $modulo=false)
    {
        $modelo     = $modelo . 'Modelo';
        $rutaModelo = ROOT. 'modelos' .DS. $modelo. '.php';
        
        /*Si Se Solicito Un Modulo, Inicializamos El Modulo*/
        if(!$modulo){
            $modulo= $this->peticion->getModulo();
        }
       
        if($modulo && ($modulo != 'default') ){
            /*Si Se Envio Un Modulo Y Es Diferente Al Default Asignamos La Ruta Del Modelo Del Modulo Solicitado*/
            $rutaModelo= ROOT .'modulos' .DS. $modulo .DS. 'modelos' .DS. $modelo . '.php' ;
        }
        
        if( !is_readable($rutaModelo) ){
            throw new Exception("Error De Modelo");
        }
        else {
            require_once $rutaModelo;
            return new $modelo;
        }
    } 
    
    protected function  importModelo($modelo,$path)
    {
        if( !is_readable($path) ){
            throw new Exception("Error Al Importar El Modelo, La Ruta No Es Lejible O No Existe");
        }
        else {
            require_once $path;
            $modelo= $modelo . 'Modelo';

            if(!class_exists($modelo)){
                throw new ErrorException("Error Al Traatar De Instanciar El Modelo");
            }
            else{
            return new $modelo;
            }
        }
    }
    /**
     * Funcion Que Solicita Una Libreria En Caso De Necesitarla
     *
     * @param $libreria  nombre de la libreria solicitada
     * @throws Exception si no se puede abrir o no existe la libreria
     */
    protected function getLibrary($libreria)
    {
        $rutaLibreria = ROOT . 'libs' . DS . $libreria . '.php';
      
        if(! is_readable($rutaLibreria) ){
            throw new Exception('Error de libreria');
        }
        else{
            require_once $rutaLibreria;
        }
    }
    

    /**
     * Convierte caracteres especiales en entidades HTML enviadas via POST
     * @internal htmlspecialchars — Convierte caracteres especiales en entidades HTML
     * @param $clave
     * @return string
     */
    protected function getTexto($clave)
    {
        if(isset($_POST[$clave]) && !empty($_POST[$clave])){

            $_POST[$clave] = htmlspecialchars( $_POST[$clave] , ENT_QUOTES );
            return $_POST[$clave];
        }
        return '';
    }

    /**
     *  Verifica Que Una Varible Que Se Envie Mediante El Metodo Post Sea Entera
     * @param $clave   clave variable post
     * @return int retorna un numero
     */
    protected function getInt($clave)
    {
        if( isset($_POST[$clave]) && !empty($_POST[$clave]) ){
            //filter_input — Toma una variable externa concreta por nombre y opcionalmente la filtra
            $_POST[$clave] = filter_input( INPUT_POST , $clave , FILTER_VALIDATE_INT);
            
        return $_POST[$clave];
        }
        return 0;
    }

    /**
     *  /*Si la Variable No Es Un Entero Retorna Un Cero
     * @param $clave   clave variable post
     * @return int retorna un numero
     */
    protected function filtrarInt($int)
    {   
        $int = (int)$int;
  
        if( is_int($int) ){
            return $int;
        } 
        return 0;
    }

    /**
     * Retorna Una Variable Enviada Mediante El Metodo Post
     * @param $clave   clave variable post
     * @return int retorna un numero
     */
    protected function getPostParametro($clave)
    {
        if( isset($_POST[$clave]) ){
            return $_POST[$clave];
        }
    }

    /**
     * Retorna Un Valor AlphaNumerico
     * @param $clave   clave variable post
     * @return int retorna un numero
     */
     protected function getAlphaNum($clave)
    {
        if( isset($_POST[$clave]) && ! empty($_POST[$clave]) ){
            $_POST[$clave] = (string) preg_replace('/[^A-Z0-9_]/i', '', $_POST[$clave]);
            
        return trim($_POST[$clave]);
        }
    }

    /**
     * Valida Si La Direccion De Email Es Correcta
     * @param $clave   clave variable post
     * @return int retorna un numero
     */
    protected function validarEmail($email)
    {
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            return false;
        }
        else{
            return true;
        }
    }
    
    protected  function validarUrl($url){
        if(filter_var($url,FILTER_VALIDATE_URL)){
            return true;
        }
        return false;
    }
    /**
     * @internal        strip_tags — Retira las etiquetas HTML y PHP de un string
     * @internal        get_magic_quotes_gpc — Obtiene el valor actual de configuración de magic_quotes_gpc
     * @param $clave
     * @return string
     */
    protected function getSql($clave)
    {   
        if( isset($_POST[$clave] ) && !empty ($_POST[$clave]) )
        {
            $_POST[$clave] = strip_tags($_POST[$clave]);

            if( !get_magic_quotes_gpc() ){
                /** @noinspection PhpDeprecationInspection */
                $_POST[$clave] =  mysql_escape_string($_POST[$clave]);
            }

            return trim($_POST[$clave]);
        }
    }
     

    /**
     * Redireciona La Pagina Hacia La Ruta Enviada o si no a la ruta principal
     * @param bool $ruta
     */
    protected function redireccionarPagina( $ruta = false)
    {
        if(! $ruta){
            header('location:' . BASE_URL);
            exit;
        }
         else{
             header('location:' . BASE_URL . $ruta);
             exit;
        }
    }
    
}
    

