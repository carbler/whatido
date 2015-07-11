<?php
    ini_set('display_errors', 1);
    define('DS', DIRECTORY_SEPARATOR);
    define('ROOT', realpath(dirname(__FILE__)) . DS);
    define('APP_PATH', ROOT . 'app' . DS);

    try {

        require_once APP_PATH . 'config.php';
        require_once APP_PATH . 'Autoload.php';

        Session::iniciarSession();
        $registro = Registro::getInstancia();
        $registro->peticion  = new Peticion();
        $registro->baseDatos = new BaseDatos(ENGINE,DB_HOST,DB_NAME,DB_USER,DB_PASS,DB_CHARSET);

        new Bootstrap( $registro->peticion );
    }
    catch (Exception $exc) {
        echo $exc->getMessage();
    }
?>
