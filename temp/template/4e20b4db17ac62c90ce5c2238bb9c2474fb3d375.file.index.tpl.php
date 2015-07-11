<?php /* Smarty version Smarty-3.1.8, created on 2015-06-25 17:17:16
         compiled from "/opt/lampp/htdocs/whatido/vistas/error/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:194043563558c1b7cbab315-26004695%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e20b4db17ac62c90ce5c2238bb9c2474fb3d375' => 
    array (
      0 => '/opt/lampp/htdocs/whatido/vistas/error/index.tpl',
      1 => 1435021548,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194043563558c1b7cbab315-26004695',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'layoutParametros' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_558c1b7cc059e0_94943807',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558c1b7cc059e0_94943807')) {function content_558c1b7cc059e0_94943807($_smarty_tpl) {?><link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['layoutParametros']->value['root'];?>
/public/css/estilos.css">

<div class="fondo">
    <div class="row">
        <div class="cajon col s12 m10 l10 offset-m1 offset-l1">

            <div class="col s12 m12 l12">
                <a href="javascript:history.back(1)" class="btn-cerrar"><i class="mdi-action-highlight-remove""></i> </a>
            </div>

            <p class="text">
                <i class="mdi-alert-error  icon" style="color: #D40000"></i>
                <?php echo (($tmp = @$_smarty_tpl->tpl_vars['text']->value)===null||$tmp==='' ? "Se Ha Presentado Un Error En La Operacion" : $tmp);?>

            </p>

            <div class="right">
                <a class="btn boton  waves-light #00bcd4 cyan" href='<?php echo $_smarty_tpl->tpl_vars['layoutParametros']->value['root'];?>
'>
                    <i class="mdi-action-home left"></i>Ir Al Inicio</a>

                <a class=" btn boton waves-light #ff9800 orange"   href="javascript:history.back(1)">
                    <i class="mdi-action-history left" ></i>Volver Atras</a>
                  
                <?php if ((!Session::getClaveSession('autenticado'))){?>
                    <a class="btn btn-warning" href="<?php echo $_smarty_tpl->tpl_vars['layoutParametros']->value['root'];?>
usuarios/login">Iniciar Sesi&oacute;n</a>
                <?php }?>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<?php }} ?>