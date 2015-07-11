<?php

/**
 * clase Vista
 *
 * Esta Clase se encarga de llamar a las vistas y de trabajar con los diferntes layout que puedan usarse dentro de
 * la aplicacion
 *
 * @author    Jose Ricardo Pedraza  < jr091291@gmail.com >
/**/

require_once ROOT . 'libs' . DS . 'smarty' .DS. 'libs' .DS. 'Smarty.class.php';

class Vista extends Smarty
{
    private $peticion;
    private $template;
    private $rutas;
    private $css;
    private $js;
    private $item;

    public function __construct(Peticion $peticion ) {
        parent::__construct();

        $this->peticion           = $peticion;
        $this->template           = DEFAULT_LAYOUT;
        $this->css                = array();
        $this->js                 = array();
        $this->item               = '';

        $this->setRutasVistas( $this->peticion->getModulo(), $this->peticion->getControlador() );

    }

    /**
     * renderizarVista
     *
     * realiza las llamadas a las vistas
     *
     * @param $vista            nombre de la vista
     * @param bool $item
     * @param bool $noLayout
     * @throws Exception
     */
    public function renderizarVista( $vista, $item=false, $noLayout= false)
    {
        $rutaVista= $this->rutas['vista'] . $vista . '.tpl';
        ($item) ? $this->item = $item : '';
        $this->setRutasTemplate();

        ($this->getConfigsLayout()) ? include_once $this->getConfigsLayout() :null;
        ($this->getConfigTemplate())? include_once $this->getConfigTemplate() :null;

        if(!is_readable($rutaVista)) {
            throw new Exception('La Vista Solicitada No Se Encuentra');
        }
        else {
            if($noLayout){
                $this->template_dir= $this->rutas['vista'];
                $this->display($rutaVista);
                exit;
            }

            $this->assign('contenido',$rutaVista);
        }

        $this->assign('widgets',$this->getWidgets());
        $this->display('template.tpl');
    }

    private function setRutasVistas($modulo,$controlador)
    {
        if($modulo){
            $this->rutas['vista'] = ROOT. 'modulos' .DS. $modulo .DS. 'vistas' .DS. $controlador .DS;
            $this->rutas['css']   = BASE_URL .'modulos/' .$modulo. '/vistas/'. $controlador. '/css/';
            $this->rutas['img']   = BASE_URL .'modulos/' .$modulo. '/vistas/'. $controlador. '/img/';
            $this->rutas['js']    = BASE_URL .'modulos/' .$modulo. '/vistas/'. $controlador. '/js/';
        }
        else{
            $this->rutas['vista'] = ROOT. 'vistas' .DS. $controlador .DS;
            $this->rutas['css']   = BASE_URL .'vistas/'. $controlador. '/css/';
            $this->rutas['img']   = BASE_URL .'vistas/'. $controlador. '/img/';
            $this->rutas['js']    = BASE_URL .'vistas/'. $controlador. '/js/';
        }

        $this->rutas['layout']     = ROOT .'vistas'.DS. 'layout' .DS;
        $this->rutas['layout_css'] = BASE_URL.'vistas/layout/'.$this->template.'/css/';
        $this->rutas['layout_img'] = BASE_URL.'vistas/layout/'.$this->template.'/img/';
        $this->rutas['layout_js']  = BASE_URL.'vistas/layout/'.$this->template.'/js/' ;
    }

    private function setRutasTemplate()
    {
        $this->template_dir = ROOT . 'vistas' .DS. 'layout'   .DS. $this->template .DS;
        $this->compile_dir  = ROOT . 'temp'   .DS. 'template' .DS;
        $this->config_dir   = ROOT . 'vistas' .DS. 'layout'   .$this->template .DS. 'configs' .DS;
        $this->cache_dir    = ROOT . 'temp'   .DS. 'cache'    .DS;
    }

    private function getConfigsLayout(){
        $file=$this->rutas['layout']. 'configs.php';

        if(is_readable($file)){
            return $file;
        }
        throw new ErrorException("El Archivo De Configuracion Del Layout No Se Encuentra");
    }

    private function getConfigTemplate(){
        $file=$this->rutas['layout'].DS. $this->template .DS. 'config.php';

        if(is_readable($file)){
            return $file;
        }
        throw new ErrorException("El Archivo De Configuracion Del Layout No Se Encuentra");
    }

    public function setJs(array $js)
    {
        if(is_array($js) && count($js)){
            for($i=0; $i < count($js); $i++){
                $this->js[] = $this->rutas['js'] . $js[$i] . '.js';
            }
        } else {
            throw new Exception('Error de  Archivo js');
        }
    }

    public function setCss(array $css)
    {
        if(is_array($css) && count($css)){
            for($i=0; $i < count($css); $i++){
                $this->css[] = $this->rutas['css'] . $css[$i] . '.css';
            }
        } else {
            throw new Exception('Error de Archivo css');
        }
    }

    public function setCssPublic(array $css)
    {
        if(is_array($css) && count($css)){
            for($i=0; $i < count($css); $i++){
                $this->css[] = BASE_URL ."public/css/" . $css[$i] . '.css';
            }
        } else {
            throw new Exception('Error de Archivo css');
        }
    }

    public function setJsPublic(array $js)
    {
        if(is_array($js) && count($js)){
            for($i=0; $i < count($js); $i++){
                $this->js[] = BASE_URL ."public/js/" . $js[$i] . '.js';
            }
        } else {
            throw new Exception('Error de Archivo css');
        }
    }

    public function setTemplate($template) {
        $this->template =(String)$template;
    }

    public function getwidget($widget, $metodo, $opciones=array())
    {
        if(! is_array($opciones)){
            $opciones =array($opciones);
        }

        $ruta = ROOT . 'widgets' .DS. $widget .'Widget.php';
        $widgetClass = $widget .'Widget';

        include_once $ruta;
        if(!is_readable($ruta)) {
            throw new Exception ("Error Ruta De Widget");
        }
        else{

            if(!class_exists($widgetClass)){
                throw new Exception('Error Clase Widget');
            }

            if (is_callable($ruta,$metodo)){

                if (count($opciones)){
                    return call_user_func_array(array(new $widgetClass,$metodo),$opciones);
                }
                else{

                    return (call_user_func(array(new $widgetClass,$metodo)));
                }
            }
        }
        throw new Exception("Error Metodo Widget");
    }

    public  function getLayoutPositions(){
        $rutaConfig= ROOT. 'vistas' .DS. 'layout' . DS. $this->template .DS. 'config.php';

        if(is_readable($rutaConfig)){
            include_once $rutaConfig;
            return get_layout_positions();
        }
        throw new Exception("Error En El Archivo De Configuracion Layout");
    }

    public  function getWidgets()
    {
        $widgets = array(
            /*'menu'=>array(
                'config'=>$this->getwidget('menu','getConfig'),
                'content'=>array('menu','getMenu'),
            )*/
        );


        $posiciones= $this->getLayoutPositions();
        $keys= array_keys($widgets);

        foreach($keys as $key){
            $posicion =$posiciones[$widgets[$key]['config']['position']];
            /*Verifica Posicion Widget*/
            if(isset($posicion)){

                /*verifica si esta desabilitado para la vista*/
                $oculto= $widgets[$key]['config']['hide'];

                if(!isset($oculto) || !in_array($this->item,$oculto)){
                    /*verifica si esta habilitado pa la vista*/
                    $mostrar = $widgets[$key]['config']['show'];
                    if($mostrar === 'all' || in_array($this->item,$mostrar)){
                        /*llenar posicion del layout*/
                        $posiciones[$widgets[$key]['config']['position']][] = $this->getWidgetContent($widgets[$key]['content']);
                    }
                }
            }
        }
        return $posiciones;
    }

    public  function getWidgetContent(array $content){
        if(!isset($content[0]) || !isset($content[1])){
            throw new Exception ("Error Contenido Widget, el widget o metodo no ha sido enviado");
            return;
        }

        if(!isset($content[2])){
            $content[2]=array();
        }

        return $this->getwidget($content[0],$content[1],$content[2]);
    }
}