<?php /* Smarty version Smarty-3.1.8, created on 2015-06-25 01:14:35
         compiled from "C:\xampp\htdocs\whatido\modulos\usuarios\vistas\ingreso\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3241558b39dba8cc54-58220457%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a4b5e4d725d537819151e71d5dbe2e8d6c1f076' => 
    array (
      0 => 'C:\\xampp\\htdocs\\whatido\\modulos\\usuarios\\vistas\\ingreso\\index.tpl',
      1 => 1435021548,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3241558b39dba8cc54-58220457',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mensaje' => 0,
    'error' => 0,
    'datos_login' => 0,
    'datos_registro' => 0,
    'layoutParametros' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_558b39dc8d3901_08857631',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558b39dc8d3901_08857631')) {function content_558b39dc8d3901_08857631($_smarty_tpl) {?><section class="ventana_emergente">
<!--Fondo Oscuro Vista-->
<div class="fondo">

    <!--Contenedor De Formularios-->
    <div class="row">
    <div class=" cajon col  m10 l10 offset-m1 offset-l1">
        <!--Boton Para Regresar-->
        <div class="col s12 m12 l12">
           <a href="javascript:history.back(1)" class="btn-cerrar"><i class="mdi-action-highlight-remove""></i> </a>
        </div>

        <div class="col l12">
            <!--alerta de mensajes-->
            <?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)){?>
                <div id="mensaje"><p><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</p></div>
            <?php }?>
        </div>

        <!--contenedor formulario ingreso-->
        <div class="col l12">

            <!--alerta de errores -->
            <?php if (isset($_smarty_tpl->tpl_vars['error']->value)){?>
                <div id="error"><p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p></div>
            <?php }?>

            <div class="col s12 m6 l6">
                <!--titulo formulario-->
                <h4 class="encabezado" ">Ingresar</h4>

                <!--formulario ingreso-->
                <form  method="post" class="formulario">
                    <input type="hidden" value="1" name="login" />

                    <div class="input-field">
                        <i class="mdi-action-account-circle prefix"></i>
                        <input id="usuario" type="text" name="usuario" class="validate" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos_login']->value['usuario'])===null||$tmp==='' ? '' : $tmp);?>
">
                        <label for="usuario">Nombre Usuario</label>
                    </div>

                    <div class="input-field ">
                        <i class="mdi-action-lock prefix"></i>
                        <input id="pass" type="password" class="validate" name="pass">
                        <label for="pass">Contraseña</label>
                    </div>

                    <div class="col l12 right-align">
                        <a href="#">¿Recuperar Mi Contraseña?</a>
                    </div>

                    <input type="submit" value="Listo" class="btn boton right" />

                </form>

            </div>

            <!--contenedor formulario registro-->
            <div class="col s12 m6 l6 divisordiv">

                <!--titulo formulario-->
                <h4 class="encabezado">Bienvenido</h4>

                <!--formulario ingreso-->
                <form  method="post" class="formulario">
                    <input type="hidden" value="1" name="registro" />

                    <div class="input-field">
                        <i class="mdi-action-account-circle prefix"></i>
                        <input id="usuario_registro" type="text" name="usuario_registro" class="validate" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos_registro']->value['usuario_registro'])===null||$tmp==='' ? '' : $tmp);?>
">
                        <label for="usuario_registro">Nombre Usuario</label>
                    </div>
                    <div class="input-field ">
                        <i class="mdi-communication-email prefix"></i>
                        <input id="mail" type="email" class="validate" name="email" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos_registro']->value['email'])===null||$tmp==='' ? '' : $tmp);?>
">
                        <label for="mail">Correo Electronico</label>
                    </div>

                    <div class="input-field ">
                        <i class="mdi-action-lock prefix"></i>
                        <input id="pass_registro" type="password" class="validate" name="pass_registro">
                        <label for="pass_registro">Contraseña</label>
                    </div>

                    <div class="input-field ">
                        <i class="mdi-action-lock-outline prefix"></i>
                        <input id="confirm" type="password" class="validate" name="confirmar">
                        <label for="confirm">Confirmar Contraseña</label>
                    </div>

                    <div class="col l12 right-align">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['layoutParametros']->value['root'];?>
public/terminos_condiciones.html" target="_blank">Ver Terminos Y Condiciones</a>
                    </div>

                    <input type="submit" value="Registrarme" class="btn boton right"/>

              </form>
            </div>

        </div>
    </div>
    </div>
</div>
</section>



<?php }} ?>