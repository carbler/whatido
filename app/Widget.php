<?php
/**
 * clase Widget
 *
 * Esta Clase sirve de base en la construccion de widget  (pequeños programas dentro de la app)
 *
 * @author    Jose Ricardo Pedraza  < jr091291@gmail.com >
/**/

abstract class Widget {
    /**
     * @param $modelo          nombre del modelo a requrir usado en el widget
     * @return  $modeloClass   instancia del modelo
     * @throws ErrorException  si el modelo no exixte o no es legible
     */
    protected function cargarModelo($modelo)
    {
        $rutaModelo = ROOT .'widgets'.DS. 'modelos'. DS. $modelo .'.php' ;

        if(is_readable($rutaModelo)){

            include_once $rutaModelo;

            $modeloClass = $modelo. 'ModeloWidget';

            if (class_exists($modeloClass)){
                return new $modeloClass;
            }
        }
        throw new ErrorException("Error Al Cargar El Modelo Del Widget");
    }


    /**
     * @param $vista             nombre de la vista del widget
     * @param array $datos       datos para ser parceados en la vista
     * @param string $ext       ext del foemato de la vista
     * @return string           contenido de los datos procesados en la vista
     * @throws ErrorException   si la vista no existe o no es legible
     */
    protected function rederizarWidget($vista, $datos=array(),$ext = 'phtml')
    {
        $rutaVista = ROOT .'widgets'.DS. 'vistas'. DS. $vista .'.'. $ext ;

        if( is_readable($rutaVista)){
            ob_start();
            extract($datos);
            include $rutaVista;
            $content =  ob_get_contents();
            ob_end_clean();

            return $content;
        }
        throw new ErrorException("Error En La Vista Del Widget");
    }

}