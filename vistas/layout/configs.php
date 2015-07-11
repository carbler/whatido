<?php
/*Configuracion General Para Todos Los Template*/
$diccionario=array(
    'ruta_css'=> $this->rutas['layout_css'],
    'ruta_img'=> $this->rutas['layout_img'],
    'ruta_js'=>  $this->rutas['layout_js'],
    'layout_img'=>$this->rutas['layout_img'],
    'item'=>$this->item,
    'js' => $this->js,
    'css'=> $this->css,
    'root'=> BASE_URL,
    'configs'=>array(
        'sharset'=>SHARSET,
        'nombre_app'=>NOMBRE_APP,
        'autor_app'=>AUTOR_APP,
        'descripcion_app'=>DESCRIPCION_APP,
        'keyword'=>KEYWORD_APP,
        'company_app'=>COMPANY_APP,
        'mail'=> MAIL_APP,
        'usuario'=> Session::getClaveSession('usuario')
    )
);

$this->assign('layoutParametros',$diccionario);