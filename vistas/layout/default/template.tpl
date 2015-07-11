<!DOCTYPE html>
<html>
<head>
    <title>{$titulo|default:"Sin titulo"}</title>

    <!--Etiquetas Metadatos-->
    <meta charset="utf-8">
    <meta name="application-name" content="{$layoutParametros.configs.nombre_app}"/>
    <meta name="author"           content="{$layoutParametros.configs.autor_app}">
    <meta name = "description"    content="{$layoutParametros.configs.descripcion_app}">
    <meta name = "keywords"       content="{$layoutParametros.configs.keyword}"/>
    <meta name="viewport"         content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

    <!--Icono Navegador -->
    <link type="image/icon" href="{$layoutParametros.root}vistas\layout\default\favicon.ico" rel="icon" >

    <!--Librerias Y Archivos Css-->
    <link rel="stylesheet" type="text/css" href="{$layoutParametros.root}public/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="{$layoutParametros.root}public/css/animate.css">
    <link rel="stylesheet" type="text/css" href="{$layoutParametros.ruta_css}style.css">

</head>

<body>

	<!--Boton Eventos Flotante Por Toda La Pagina-->
	<a id="agregarEvento" class="btn-dragable btn-floating btn-large btn tooltipped waves-effect waves-light #00bcd4 cyan"
       data-position="top" data-delay="50" data-tooltip="Agregar Evento" href="{$layoutParametros.root}eventos/crearEvento">
        <i class="mdi-content-add"></i>
    </a>

	<!--Cabecera Principal -->
	<header class="navbar-fixed">
    <!--Menu Principal De Navegacion-->
    	<nav id="navBar">
    	    <div class="nav-wrapper ">
    	        <!--Logotipo Empresa-->
    	        <a id="logo" href="{$layoutParametros.root}" class="brand-logo center">
    	        	<img title="WID Es lo Que Haces" src="{$layoutParametros.ruta_img}logo.svg">
                </a>

                <!--Buton Menu Oculto-->
                <a href="#" data-activates="menu-mobile" class="button-collapse left" style="display:block; margin: 0 10px"><i class="right mdi-image-dehaze"></i></a>

                <!--Menu Principal De Navegacion Para Tablet-->
                <ul class="right hide-on-small-only hide-on-large-only">
                    {foreach item=it from=$layoutParametros.navBar }
                        <li class="{$it.class}" >
                            <a id="{$it.id}" href="{$it.enlace}">
                                <i class="left {$it.icon} tooltipped"  data-position="bottom"  data-tooltip="{$it.tooltip}"></i>
                            </a>
                        </li>
                    {/foreach}
                </ul>


                <!--Menu Principal De Navegacion Para Escritorio-->
                <ul class="right hide-on-med-and-down">
                    {foreach item=it from=$layoutParametros.navBar }
                        <li class="{$it.class}" >
                            <a id="{$it.id}" class="tooltipped" data-position="bottom"  data-tooltip="{$it.tooltip}" href="{$it.enlace}">
                                <i class="left {$it.icon}"></i>
                                {$it.titulo}
                            </a>
                        </li>
                    {/foreach}
                </ul>

                <!--Menu Principal De Navegacion Oculto-->
                <ul class="side-nav" id="menu-mobile">
                    <div id="fondo-menu">
                    	<img src="{$layoutParametros.ruta_img}fondo-menu.png" class="img-menu">
                    	<img src="{$layoutParametros.ruta_img}logos.png"      class="circle foto-menu">
                    	<a href='mailto:{$layoutParametros.configs.mail}'     class="info-empresa">{$layoutParametros.configs.mail}</a>
                    	<a href="" style="margin-top: -62px; color: #fff;"><i class="mdi-navigation-expand-more right"></i></a>
                    </div>
                    {if $layoutParametros.menu}
                        {foreach item=it from=$layoutParametros.menu }
                            <li class="{$it.class}" >
                                <a id="{$it.id}" href="{$it.enlace}">
                                    <i class="not-margin left {$it.icon}"></i>
                                    {$it.titulo}
                                </a>
                            </li>
                        {/foreach}
                    {/if}

                </ul>
            </div>
        </nav>
    </header>


    <!--section para agregar contenido de las otras vistas-->
    <div id="div_contenido">
        <noscript><p>Para el correcto funcionamiento debe tener el soporte de javascript habilitado</p></noscript>
        <!--Contenido Vista Solicitada-->
        {include file=$contenido}
        <!-- Cerrar div Contenido-->
    </div>

    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">What I Do</h5>
                    <p class="grey-text text-lighten-4">Los Mejores Eventos En Tu Cuidad Todos Los Dias</p>
                </div>
                <div class="col l6 s12">

                    <div class="col l6 s12">
                        <h5 class="white-text">Contenido</h5>
                        <ul>
                            {if $layoutParametros.menu}
                                {foreach item=it from=$layoutParametros.menu }
                                    <li class="{$it.class}" >
                                        <a id="{$it.id}" href="{$it.enlace}">
                                            <i class="left {$it.icon}"></i>
                                            {$it.titulo}
                                        </a>
                                    </li>
                                {/foreach}
                            {/if}
                        </ul>

                    </div>


                    <div class="col l6 s12">
                        <h5 class="white-text">Navegación</h5>
                        <ul>
                            {if $layoutParametros.menuNav}
                                {foreach item=it from=$layoutParametros.menuNav }
                                    <li class="{$it.class}" >
                                        <a id="{$it.id}" href="{$it.enlace}">
                                            <i class="left {$it.icon}"></i>
                                            {$it.titulo}
                                        </a>
                                    </li>
                                {/foreach}
                            {/if}
                        </ul>

                    </div>

                </div>

            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2015 Copyright Todos Los Derechos Reservados
                <a class="grey-text text-lighten-4 right" href="mailto:{$layoutParametros.configs.mail}">{$layoutParametros.configs.mail}</a>
            </div>
        </div>
    </footer>

    {if isset($layoutParametros.css) && count($layoutParametros.css)}
        {foreach item=css from=$layoutParametros.css}
            <link rel='stylesheet' type='text/css' href='{$css}'>
        {/foreach}
    {/if}

    <!-- Librerias Y Archivos JavaScript -->
    <script src="{$layoutParametros.root}public/js/jquery.min.js" type="text/javascript"></script>
    <script src="{$layoutParametros.root}public/js/materialize.min.js" type="text/javascript"></script>

    <!-- Mis Archivos Jscrip-->
    <script src="{$layoutParametros.ruta_js}vistas.js" 		 type="text/javascript"></script>
    <script src="{$layoutParametros.ruta_js}prototipos.js"		 type="text/javascript"></script>

    {if isset($layoutParametros.js) && count($layoutParametros.js)}
        {foreach item=js from=$layoutParametros.js}
            <script src="{$js}" type="text/javascript"></script>
        {/foreach}
    {/if}

    <script>
        var root = '{$layoutParametros.root}';
        var item = '{$layoutParametros.item}';
        var e ;

        $(document).ready(function(){

            /*inializacion eventos para metarializecsss*/
            $(".button-collapse").sideNav();
            $('.tooltipped').tooltip();
            $('select').material_select();
            
             $('.collapsible').collapsible({
                accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
            });
        });

    </script>


    <!-- cierre Body -->
    </body>
</html>


