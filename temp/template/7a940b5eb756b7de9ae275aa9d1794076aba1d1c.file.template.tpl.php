<?php /* Smarty version Smarty-3.1.8, created on 2015-06-24 02:34:08
         compiled from "C:\xampp\htdocs\whatido\vistas\layout\default\template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:90325589fb009f8012-97103095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a940b5eb756b7de9ae275aa9d1794076aba1d1c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\whatido\\vistas\\layout\\default\\template.tpl',
      1 => 1435021556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90325589fb009f8012-97103095',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titulo' => 0,
    'layoutParametros' => 0,
    'it' => 0,
    'contenido' => 0,
    'css' => 0,
    'js' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5589fb00cbefc8_80595879',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5589fb00cbefc8_80595879')) {function content_5589fb00cbefc8_80595879($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['titulo']->value)===null||$tmp==='' ? "Sin titulo" : $tmp);?>
</title>

    <!--Etiquetas Metadatos-->
    <meta charset="utf-8">
    <meta name="application-name" content="<?php echo $_smarty_tpl->tpl_vars['layoutParametros']->value['configs']['nombre_app'];?>
"/>
    <meta name="author"           content="<?php echo $_smarty_tpl->tpl_vars['layoutParametros']->value['configs']['autor_app'];?>
">
    <meta name = "description"    content="<?php echo $_smarty_tpl->tpl_vars['layoutParametros']->value['configs']['descripcion_app'];?>
">
    <meta name = "keywords"       content="<?php echo $_smarty_tpl->tpl_vars['layoutParametros']->value['configs']['keyword'];?>
"/>
    <meta name="viewport"         content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

    <!--Icono Navegador -->
    <link type="image/icon" href="<?php echo $_smarty_tpl->tpl_vars['layoutParametros']->value['root'];?>
vistas\layout\default\favicon.ico" rel="icon" >

    <!--Librerias Y Archivos Css-->
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['layoutParametros']->value['root'];?>
public/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['layoutParametros']->value['root'];?>
public/css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['layoutParametros']->value['ruta_css'];?>
style.css">

</head>

<body>

	<!--Boton Eventos Flotante Por Toda La Pagina-->
	<a id="agregarEvento" class="btn-dragable btn-floating btn-large btn tooltipped waves-effect waves-light #00bcd4 cyan"
       data-position="top" data-delay="50" data-tooltip="Agregar Evento" href="<?php echo $_smarty_tpl->tpl_vars['layoutParametros']->value['root'];?>
eventos/crearEvento">
        <i class="mdi-content-add"></i>
    </a>

	<!--Cabecera Principal -->
	<header class="navbar-fixed">
    <!--Menu Principal De Navegacion-->
    	<nav id="navBar">
    	    <div class="nav-wrapper ">
    	        <!--Logotipo Empresa-->
    	        <a id="logo" href="<?php echo $_smarty_tpl->tpl_vars['layoutParametros']->value['root'];?>
" class="brand-logo center">
    	        	<img title="WID Es lo Que Haces" src="<?php echo $_smarty_tpl->tpl_vars['layoutParametros']->value['ruta_img'];?>
logo.svg">
                </a>

                <!--Buton Menu Oculto-->
                <a href="#" data-activates="menu-mobile" class="button-collapse left" style="display:block; margin: 0 10px"><i class="right mdi-image-dehaze"></i></a>

                <!--Menu Principal De Navegacion Para Tablet-->
                <ul class="right hide-on-small-only hide-on-large-only">
                    <?php  $_smarty_tpl->tpl_vars['it'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['it']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['layoutParametros']->value['navBar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['it']->key => $_smarty_tpl->tpl_vars['it']->value){
$_smarty_tpl->tpl_vars['it']->_loop = true;
?>
                        <li class="<?php echo $_smarty_tpl->tpl_vars['it']->value['class'];?>
" >
                            <a id="<?php echo $_smarty_tpl->tpl_vars['it']->value['id'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['it']->value['enlace'];?>
">
                                <i class="left <?php echo $_smarty_tpl->tpl_vars['it']->value['icon'];?>
 tooltipped"  data-position="bottom"  data-tooltip="<?php echo $_smarty_tpl->tpl_vars['it']->value['tooltip'];?>
"></i>
                            </a>
                        </li>
                    <?php } ?>
                </ul>


                <!--Menu Principal De Navegacion Para Escritorio-->
                <ul class="right hide-on-med-and-down">
                    <?php  $_smarty_tpl->tpl_vars['it'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['it']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['layoutParametros']->value['navBar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['it']->key => $_smarty_tpl->tpl_vars['it']->value){
$_smarty_tpl->tpl_vars['it']->_loop = true;
?>
                        <li class="<?php echo $_smarty_tpl->tpl_vars['it']->value['class'];?>
" >
                            <a id="<?php echo $_smarty_tpl->tpl_vars['it']->value['id'];?>
" class="tooltipped" data-position="bottom"  data-tooltip="<?php echo $_smarty_tpl->tpl_vars['it']->value['tooltip'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['it']->value['enlace'];?>
">
                                <i class="left <?php echo $_smarty_tpl->tpl_vars['it']->value['icon'];?>
"></i>
                                <?php echo $_smarty_tpl->tpl_vars['it']->value['titulo'];?>

                            </a>
                        </li>
                    <?php } ?>
                </ul>

                <!--Menu Principal De Navegacion Oculto-->
                <ul class="side-nav" id="menu-mobile">
                    <div id="fondo-menu">
                    	<img src="<?php echo $_smarty_tpl->tpl_vars['layoutParametros']->value['ruta_img'];?>
fondo-menu.png" class="img-menu">
                    	<img src="<?php echo $_smarty_tpl->tpl_vars['layoutParametros']->value['ruta_img'];?>
logos.png"      class="circle foto-menu">
                    	<a href='mailto:<?php echo $_smarty_tpl->tpl_vars['layoutParametros']->value['configs']['mail'];?>
'     class="info-empresa"><?php echo $_smarty_tpl->tpl_vars['layoutParametros']->value['configs']['mail'];?>
</a>
                    	<a href="" style="margin-top: -62px; color: #fff;"><i class="mdi-navigation-expand-more right"></i></a>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['layoutParametros']->value['menu']){?>
                        <?php  $_smarty_tpl->tpl_vars['it'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['it']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['layoutParametros']->value['menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['it']->key => $_smarty_tpl->tpl_vars['it']->value){
$_smarty_tpl->tpl_vars['it']->_loop = true;
?>
                            <li class="<?php echo $_smarty_tpl->tpl_vars['it']->value['class'];?>
" >
                                <a id="<?php echo $_smarty_tpl->tpl_vars['it']->value['id'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['it']->value['enlace'];?>
">
                                    <i class="not-margin left <?php echo $_smarty_tpl->tpl_vars['it']->value['icon'];?>
"></i>
                                    <?php echo $_smarty_tpl->tpl_vars['it']->value['titulo'];?>

                                </a>
                            </li>
                        <?php } ?>
                    <?php }?>

                </ul>
            </div>
        </nav>
    </header>


    <!--section para agregar contenido de las otras vistas-->
    <div id="div_contenido">
        <noscript><p>Para el correcto funcionamiento debe tener el soporte de javascript habilitado</p></noscript>
        <!--Contenido Vista Solicitada-->
        <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['contenido']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
                            <?php if ($_smarty_tpl->tpl_vars['layoutParametros']->value['menu']){?>
                                <?php  $_smarty_tpl->tpl_vars['it'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['it']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['layoutParametros']->value['menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['it']->key => $_smarty_tpl->tpl_vars['it']->value){
$_smarty_tpl->tpl_vars['it']->_loop = true;
?>
                                    <li class="<?php echo $_smarty_tpl->tpl_vars['it']->value['class'];?>
" >
                                        <a id="<?php echo $_smarty_tpl->tpl_vars['it']->value['id'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['it']->value['enlace'];?>
">
                                            <i class="left <?php echo $_smarty_tpl->tpl_vars['it']->value['icon'];?>
"></i>
                                            <?php echo $_smarty_tpl->tpl_vars['it']->value['titulo'];?>

                                        </a>
                                    </li>
                                <?php } ?>
                            <?php }?>
                        </ul>

                    </div>


                    <div class="col l6 s12">
                        <h5 class="white-text">Navegación</h5>
                        <ul>
                            <?php if ($_smarty_tpl->tpl_vars['layoutParametros']->value['menuNav']){?>
                                <?php  $_smarty_tpl->tpl_vars['it'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['it']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['layoutParametros']->value['menuNav']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['it']->key => $_smarty_tpl->tpl_vars['it']->value){
$_smarty_tpl->tpl_vars['it']->_loop = true;
?>
                                    <li class="<?php echo $_smarty_tpl->tpl_vars['it']->value['class'];?>
" >
                                        <a id="<?php echo $_smarty_tpl->tpl_vars['it']->value['id'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['it']->value['enlace'];?>
">
                                            <i class="left <?php echo $_smarty_tpl->tpl_vars['it']->value['icon'];?>
"></i>
                                            <?php echo $_smarty_tpl->tpl_vars['it']->value['titulo'];?>

                                        </a>
                                    </li>
                                <?php } ?>
                            <?php }?>
                        </ul>

                    </div>

                </div>

            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2015 Copyright Todos Los Derechos Reservados
                <a class="grey-text text-lighten-4 right" href="mailto:<?php echo $_smarty_tpl->tpl_vars['layoutParametros']->value['configs']['mail'];?>
"><?php echo $_smarty_tpl->tpl_vars['layoutParametros']->value['configs']['mail'];?>
</a>
            </div>
        </div>
    </footer>

    <?php if (isset($_smarty_tpl->tpl_vars['layoutParametros']->value['css'])&&count($_smarty_tpl->tpl_vars['layoutParametros']->value['css'])){?>
        <?php  $_smarty_tpl->tpl_vars['css'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['css']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['layoutParametros']->value['css']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['css']->key => $_smarty_tpl->tpl_vars['css']->value){
$_smarty_tpl->tpl_vars['css']->_loop = true;
?>
            <link rel='stylesheet' type='text/css' href='<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
'>
        <?php } ?>
    <?php }?>

    <!-- Librerias Y Archivos JavaScript -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['layoutParametros']->value['root'];?>
public/js/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['layoutParametros']->value['root'];?>
public/js/materialize.min.js" type="text/javascript"></script>

    <!-- Mis Archivos Jscrip-->
    <script src="<?php echo $_smarty_tpl->tpl_vars['layoutParametros']->value['ruta_js'];?>
vistas.js" 		 type="text/javascript"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['layoutParametros']->value['ruta_js'];?>
prototipos.js"		 type="text/javascript"></script>

    <?php if (isset($_smarty_tpl->tpl_vars['layoutParametros']->value['js'])&&count($_smarty_tpl->tpl_vars['layoutParametros']->value['js'])){?>
        <?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['layoutParametros']->value['js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value){
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
            <script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
" type="text/javascript"></script>
        <?php } ?>
    <?php }?>

    <script>
        var root = '<?php echo $_smarty_tpl->tpl_vars['layoutParametros']->value['root'];?>
';
        var item = '<?php echo $_smarty_tpl->tpl_vars['layoutParametros']->value['item'];?>
';
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


<?php }} ?>