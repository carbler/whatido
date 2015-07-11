<?php

    /**
     * Clase Base De Datos
     *
     * Esta Clase nos permite la conexion con la base datos mediante PDO_MYSQL, el cual es un controlador que
     * implementa la interfaz de Objetos de Datos de PHP (PDO) para permitir el acceso de PHP a bases de
     * datos de MySQL 3.x, 4.x y 5.x.
     *
     * @author     Jose Ricardo Pedraza  < jr091291@gmail.com">
    /**/

class BaseDatos extends PDO
{
    private $engine;
    private $host;
    private $database;
    private $user;
    private $pass;

    /**
     * creamos Una Instancia De La Base De Datos Mediante El Constructor De La Clase PDO
     * @link http://php.net/manual/en/pdo.construct.php
     */
    public function __construct( $provedor, $db_host, $db_name, $db_user, $db_pass,$db_charset)
    {
        $this->engine = $provedor;
        $this->host = $db_host;
        $this->database = $db_name;
        $this->user = $db_user;
        $this->pass = $db_pass;
        $dns = $this->engine.':dbname='.$this->database.";host=".$this->host;

        parent::__construct(
            $dns,
            $this->user,
            $this->pass,
            array(
                //MYSQL_ATTR_INIT_COMMAND: Comando a ejecutar cuando se conecta al servidor MySQL. Al reconectar se volverá a ejecutar automáticamente.
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES ' . $db_charset
            )
        );
    }

    /**
     * @return mixed
     */
    public function getDatabase()
    {
        return $this->database;
    }

    /**
     * @param mixed $database
     */
    public function setDatabase($database)
    {
        $this->database = $database;
    }

    /**
     * @return mixed
     */
    public function getEngine()
    {
        return $this->engine;
    }

    /**
     * @param mixed $engine
     */
    public function setEngine($engine)
    {
        $this->engine = $engine;
    }

    /**
     * @return mixed
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @param mixed $host
     */
    public function setHost($host)
    {
        $this->host = $host;
    }

    /**
     * @return mixed
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * @param mixed $pasus
     */
    public function setPass($pass)
    {
        $this->pass = $pass;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }
}
