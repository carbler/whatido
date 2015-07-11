<?php /* Smarty version Smarty-3.1.8, created on 2015-06-25 17:16:50
         compiled from "/opt/lampp/htdocs/whatido/modulos/eventos/vistas/buscarEvento/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:333917799558c1b6277a0a7-09188245%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93168bb2d2a11d85e4996308720b7a91a053dbef' => 
    array (
      0 => '/opt/lampp/htdocs/whatido/modulos/eventos/vistas/buscarEvento/index.tpl',
      1 => 1435021548,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '333917799558c1b6277a0a7-09188245',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'eventos' => 0,
    'layoutParametros' => 0,
    'evento' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_558c1b627d3749_56865564',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558c1b627d3749_56865564')) {function content_558c1b627d3749_56865564($_smarty_tpl) {?>  <?php  $_smarty_tpl->tpl_vars['evento'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['evento']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['eventos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['evento']->key => $_smarty_tpl->tpl_vars['evento']->value){
$_smarty_tpl->tpl_vars['evento']->_loop = true;
?>                          

<section class="row" style="color: #004E91">
    <div>
        <img id="img-back" src="<?php echo $_smarty_tpl->tpl_vars['layoutParametros']->value['root'];?>
modulos/eventos/vistas/buscarEvento/img/portada.jpg">
    </div>

    <div class="col s12 m12 l10 offset-l1 box-write" style="margin-top: 20px; margin-bottom: 30px;">
        <p><strong style="color: #892C14">Fecha De Creación: </strong><?php echo $_smarty_tpl->tpl_vars['evento']->value['create_on'];?>
</p>
        <p><strong style="color: #892C14">Ultima Actualización:</strong> <?php echo $_smarty_tpl->tpl_vars['evento']->value['change_on'];?>
</p>
        <h4 class="title" "><?php echo $_smarty_tpl->tpl_vars['evento']->value['nombre'];?>
</h4>
    </div>
    <div class="col l12">
 
        <div class="col s12 m5 l5 offset-l1  box-write">
            <h5 class="title">Información General</h5>
            <p><strong>Nombre: </strong> <?php echo $_smarty_tpl->tpl_vars['evento']->value['nombre'];?>
</p>
            <p><strong>Lugar: </strong><?php echo $_smarty_tpl->tpl_vars['evento']->value['lugar'];?>
</p>
            <p><strong>Dirección: </strong><?php echo $_smarty_tpl->tpl_vars['evento']->value['direccion'];?>
</p>
            <p><strong>Ciudad: </strong><?php echo $_smarty_tpl->tpl_vars['evento']->value['ciudad'];?>
</p>
            <p><strong>Categoria: </strong><?php echo $_smarty_tpl->tpl_vars['evento']->value['categoria'];?>
</p>
        </div>


        <div class="col s12 m6 l4 offset-l1 offset-m1 box-write">
            <div>
                <h5 class="title">Información Adicional</h5>
                <p><strong>Fecha Realización: </strong> De <strong><?php echo $_smarty_tpl->tpl_vars['evento']->value['fecha_ini'];?>
</strong> Hasta <strong><?php echo $_smarty_tpl->tpl_vars['evento']->value['fecha_fin'];?>
</strong></p>
                <p><strong>Duración: </strong> De <strong><?php echo $_smarty_tpl->tpl_vars['evento']->value['hora_ini'];?>
</strong> Hasta <strong><?php echo $_smarty_tpl->tpl_vars['evento']->value['hora_fin'];?>
</strong></p>
                <p><strong>Cover: $</strong><?php echo $_smarty_tpl->tpl_vars['evento']->value['valor'];?>
</p>

            </div>

            <div>
                <h5 class="title">Información Contacto</h5>
                <p><strong>Email:</strong> <?php echo $_smarty_tpl->tpl_vars['evento']->value['email'];?>
</p>
                <p><strong>Telefono: </strong><?php echo $_smarty_tpl->tpl_vars['evento']->value['telefono'];?>
</p>
                <p><strong>Website : <a href="<?php echo $_smarty_tpl->tpl_vars['evento']->value['web_site'];?>
"><?php echo $_smarty_tpl->tpl_vars['evento']->value['web_site'];?>
</a></p>
                <a href="/whatido/usuarios/perfil/info/<?php echo $_smarty_tpl->tpl_vars['evento']->value['usuario'];?>
">Ver Perfil De Usuario</a>
            </div>
        </div>
    </div>

    <div class="col s12 m12 l10 offset-l1 box-write" style="margin-top: 50px">
        <h5 class="title">Descripción:</h5>
        <p><?php echo $_smarty_tpl->tpl_vars['evento']->value['descripcion'];?>
</p>
    </div>
</section>
        
         <?php } ?><?php }} ?>