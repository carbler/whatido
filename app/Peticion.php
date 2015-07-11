<?php



    /**
     * class Peticion (Request)
     *
     * Esta clase recive una peticion via GET y la procesa mediante dos tipos de URL
     *  1. /modelo/controlador/metodo/argumentos
     *  2. /controlador/metodo/argumentos
     * @author: Ricardo Pedraza
     * @link http://www.php-fig.org/psr/psr-1/es/
     * @version: 01/04/2015/A
     * @see <a href = "http://www.dlancedu.com/" /> Pagina Guia De Este Proyecto </a>
     */

class Peticion
{
    private $modulo;
    private $metodo;
    private $modulos;
    private $argumentos;
    private $controlador;

    /**
     * constructor class (Peticion)
     *
     *  Si !isset($_GET['url']) ==true (si no existe una peticion via get) entonces inicializamos las variables
     *           con valores por defecto. (si existe una peticion) filtramos la URL e Inicializamos los atributos
     *  filter_input ( INPUT_GET , 'url' , FILTER_SANITIZE_URL ); filtra una variable, con FILTER_SANITIZE_URL
     *            Elimina todos los caracteres excepto letras, dígitos y $-_.+!*'(),{}|\\^~[]`<>#%";/?:@&=.
     */

    public function __construct()
    {
        if( !isset($_GET['url']))
        {
            $this->modulo       = false;
            $this->metodo       = 'index';
            $this->argumentos   = array();
            $this->controlador  = DEFAULT_CONTROLLER;
        }
        else
        {
            $url = filter_input ( INPUT_GET , 'url' , FILTER_SANITIZE_URL );
            $this-> modulos= array('usuarios','eventos');
            $this->inicializarParametros($url);
        }
    }


    /**
     * inicilaza los parametros de la clase (Peticion)
     *
     * @internal    explode      — Divide un string en varios string
     * @internal    array_filter — Filtra los elementos no validos y los elimina.
     * @internal    array_shift  — Extrae el primer elemento de un array
     * @param       string $url  Recibe la url para procesarla segun sea el tipo de URL
     *
     */
    private function inicializarParametros($url)
    {
        $url = explode( '/' , $url );
        $url = array_filter($url);

        $modulo= array_shift($url);

        if( $this->inicializarModulo($modulo) == true ){
            $this->controlador = array_shift($url);
        }
        else{
            $this->controlador = $modulo;
        }

        $this->metodo= array_shift($url);
        $this->argumentos=$url;

        $this->verificarParametros();
    }


    /**
     * Verifica si el modulo se encuentra declarado en el array de modulos y lo inicializa dentro de la clase
     *
     * @param $modulo recibe el nombre del modulo
     * @return bool
     */
    private function inicializarModulo($modulo)
    {
        if( in_array( $modulo , $this->modulos ) ){
            $this->modulo = $modulo;
            return true ;
        }
        $this->modulo = false;
        return false;
    }

    /**
     * verifica si se asignaron valores a los parametros si no les asigna los valores por defecto
     *
     * @internal if(!$this->controlador)   Si No Existe Un Controlador asigno el controlaador por defecto
     * @internal if(!$this->metodo)   Si no existe un metodo, establece el metodo por defecto  (index)
     * @internal if(!$this->argumento)   Si no existen argumento inicializo el array de argumentos  vacio
     */
    private function verificarParametros()
    {
        if(!$this->controlador){
            $this->controlador = DEFAULT_CONTROLLER;
        }
        if(!$this->metodo){
            $this->metodo = 'index';
        }

        if(!isset($this->argumentos)){
            $this->argumentos = array();
        }
    }

    /**
     * @return string   nombre del modulo
     */
    public function getModulo()
    {
        return $this->modulo;
    }

    /**
     * @return string   nombre del metodo
     */
    public function getMetodo()
    {
        return $this->metodo;
    }


    /**
     * @return array   argumentos del metodo
     */
    public function getArgumentos()
    {
        return $this->argumentos;
    }

    /**
     * @return string   nombre del controlador
     */
    public function getControlador()
    {
        return $this->controlador;
    }
}