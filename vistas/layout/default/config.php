<?php
/*Configuracion Para Widgets*/
function get_layout_positions(){
    return array(
        'header'=>array(),
        'sidebar'=>array(),
        'footer'=>array()
    );
}

/*Configuraciones Y Parametros Para El Template*/

    /*Config Menu Top*/
    if(!Session::getClaveSession('autenticado')){
        $titulo= 'Iniciar Sessión';
        $enlace= BASE_URL. 'usuarios/ingreso';
        $icon = 'mdi-social-person';
        $tooltip='Ingresar';
    }
    else{
        $titulo= Session::getClaveSession('usuario');
        $enlace= BASE_URL . 'confirmar/salir';
        $icon = 'mdi-action-perm-identity';
        $tooltip= 'cerrar Sessión';
    }

    /*Menu De Navegacion Top*/
    $navBar= array();
    
     if(Session::getClaveSession('autenticado')){
        $navBar[]=array(
            'id'=>'miPerfil',
            'class'=>'hide-on-small-only',
            'icon'=>  'mdi-social-mood' ,
            'titulo' => 'Mi Perfil' ,
            'enlace' => BASE_URL.'usuarios/perfilUsuario',
            'tooltip'=> 'Ver Mi Perfil'
        );
    }
    
    $navBar[]= array(
            'id'=>'iniciarSesion',
            'class'=>'hide-on-small-only',
            'icon'=>    $icon,
            'titulo' => $titulo ,
            'enlace' => $enlace,
            'tooltip'=> $tooltip
        );
 

    /*Menu Izquierda*/
    $menu= array(
        array(
            'id'=>'iniciarSesion',
            'class'=>'hide-on-med-and-up',
            'icon'=>'mdi-social-person',
            'titulo' => $titulo ,
            'enlace' => $enlace
        ),
        array(
              'id'=>'acercaNosotros',
              'class'=>'',
              'icon'=>'mdi-communication-contacts',
              'titulo' =>'Quienes Somos',
              'enlace' => 'public/quienes_somos.html'
          ),
        array(
            'id'=>'fac',
            'class'=>'',
            'icon'=>'mdi-communication-live-help',
            'titulo' => 'Preguntas Frec.' ,
            'enlace' => '#fac'
        ),
        array(
            'id'=>'terminos',
            'class'=>'',
            'icon'=>'mdi-action-assignment-turned-in',
            'titulo' => 'Term. & Condi' ,
            'enlace' => BASE_URL .'public/terminos_condiciones.html'
        )
    );

    //menu navegacion
    $menuNavegacion= array(

        array(
            'id'=>'iniciarSesion',
            'class'=>'',
            'icon'=>'mdi-social-person',
            'titulo' => $titulo ,
            'enlace' => $enlace
        )
    );

    $diccionario['menu']=$menu;
    $diccionario['navBar']=$navBar;
    $diccionario['menuNav']=$navBar;
    $this->assign('layoutParametros',$diccionario);

