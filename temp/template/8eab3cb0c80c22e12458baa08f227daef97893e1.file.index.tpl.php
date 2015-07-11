<?php /* Smarty version Smarty-3.1.8, created on 2015-06-25 17:13:25
         compiled from "/opt/lampp/htdocs/whatido/vistas/confirmar/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:252729156558c1a95029a59-23059940%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8eab3cb0c80c22e12458baa08f227daef97893e1' => 
    array (
      0 => '/opt/lampp/htdocs/whatido/vistas/confirmar/index.tpl',
      1 => 1435021548,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '252729156558c1a95029a59-23059940',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'text' => 0,
    'enlace' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_558c1a95046488_10312864',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558c1a95046488_10312864')) {function content_558c1a95046488_10312864($_smarty_tpl) {?>
<div class="fondo">
    <div class="row">
    <div class="cajon col s12 m10 l10 offset-m1 offset-l1">

        <div class="col s12 m12 l12">
            <a href="javascript:history.back(1)" class="btn-cerrar"><i class="mdi-action-highlight-remove""></i> </a>
        </div>

        <p class="text"> <i class="mdi-alert-warning  icon"></i> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['text']->value)===null||$tmp==='' ? "Por Favor Confirme Su Transacción." : $tmp);?>
 </p>


        <div class="right">
            <a class="btn boton  waves-light #00bcd4 cyan" href='<?php echo $_smarty_tpl->tpl_vars['enlace']->value;?>
'>
                <i class="mdi-action-done left"></i>Confirmar</a>

            <a class=" btn boton waves-light #ff9800 orange"   href="javascript:history.back(1)">
                <i class="mdi-content-clear left" ></i>Cancelar</a>
        </div>
        <div class="clearfix"></div>

    </div>
    </div>
</div><?php }} ?>