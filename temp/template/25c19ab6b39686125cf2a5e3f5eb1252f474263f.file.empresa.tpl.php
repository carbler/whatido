<?php /* Smarty version Smarty-3.1.8, created on 2015-07-06 21:03:19
         compiled from "/opt/lampp/htdocs/whatido/modulos/usuarios/vistas/perfil/empresa.tpl" */ ?>
<?php /*%%SmartyHeaderCode:888944675558c218ccfb041-40013320%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25c19ab6b39686125cf2a5e3f5eb1252f474263f' => 
    array (
      0 => '/opt/lampp/htdocs/whatido/modulos/usuarios/vistas/perfil/empresa.tpl',
      1 => 1436209387,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '888944675558c218ccfb041-40013320',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_558c218cd4c8c3_04818019',
  'variables' => 
  array (
    'empresa' => 0,
    'emp' => 0,
    'usuario' => 0,
    'layoutParametros' => 0,
    'eventos' => 0,
    'evento' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558c218cd4c8c3_04818019')) {function content_558c218cd4c8c3_04818019($_smarty_tpl) {?>  <?php  $_smarty_tpl->tpl_vars['emp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['emp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['empresa']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['emp']->key => $_smarty_tpl->tpl_vars['emp']->value){
$_smarty_tpl->tpl_vars['emp']->_loop = true;
?>  

<div class="row" style="background-color: rgb(0, 105, 153);  margin-bottom: -20px; color: #004E91">
    <div class="col s12" style="margin-bottom: 40px;">
        <ul class="tabs">
            <li class="tab col s3"><a class="active" href="#test1">Conóceme</a></li>
            <li class="tab col s3"><a href="#test2">Mis Eventos</a></li>
            <li class="tab col s3"><a href="#test3">Asistí</a></li>
        </ul>
    </div>

    <div id="test1" class="col l10 offset-l1" style="  padding: 20px; background-color: rgb(5, 91, 131); border-radius: 10px; ">
        <div class="col l12">
            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['emp']->value['usuario'];?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp1==$_tmp2){?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['layoutParametros']->value['root'];?>
usuarios/editarPerfil/edit/<?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
" class="waves-effect waves-light btn" style =" background-color: rgb(236, 52, 52);min-width: 160px;"> Editar Perfil</a> 
             <?php }?>
            <p style="color: #ffffff;"><strong style="color: #5cbfff">Información Registrada: </strong><?php echo $_smarty_tpl->tpl_vars['emp']->value['create_on'];?>
</p>
            <p style="color: #ffffff"><strong style="color: #5cbfff">Ultima Actualización:</strong> <?php echo $_smarty_tpl->tpl_vars['emp']->value['change_on'];?>
</p>

        </div>
        <div class= "col s12 l5 box-write">
            <h3 class="title"> <i class="big mdi-action-account-circle"></i><?php echo $_smarty_tpl->tpl_vars['emp']->value['nombre'];?>
</h3>
            <p><strong>Razon Social: </strong> <?php echo $_smarty_tpl->tpl_vars['emp']->value['nombre'];?>
</p>
            <p><strong>Sigla: </strong><?php echo $_smarty_tpl->tpl_vars['emp']->value['sigla'];?>
</p>
            <p><strong>Naturaleza: </strong><?php echo $_smarty_tpl->tpl_vars['emp']->value['naturaleza'];?>
</p>
            <p><strong>Direccion: </strong> <?php echo $_smarty_tpl->tpl_vars['emp']->value['direccion'];?>
</p>
            <p><strong>Ciudad: </strong> <?php echo $_smarty_tpl->tpl_vars['emp']->value['ciudad'];?>
</p>

            <h3 class="title">Contacto</h3>
            <p><strong>Asesor: </strong> <?php echo $_smarty_tpl->tpl_vars['emp']->value['nombre_contacto'];?>
</p>
            <p><strong>Telefono: </strong> <?php echo $_smarty_tpl->tpl_vars['emp']->value['telefono'];?>
</p>
            <p><strong>Celular: </strong>  <?php echo $_smarty_tpl->tpl_vars['emp']->value['cel'];?>
</p>
            <p><strong>Web-side: </strong><a href="#"></a> <?php echo $_smarty_tpl->tpl_vars['emp']->value['web_site'];?>
</a></p>
        </div>
        <div class="col s12 l6 offset-l1 box-write">
            <h3 class="title">Acerca De Nosotros</h3>
            <p>  <?php echo $_smarty_tpl->tpl_vars['emp']->value['descripcion'];?>
 </p>
        </div>
    </div>

    <div id="test2"  class="col l10 offset-l1" style="  padding: 20px; background-color: rgb(5, 91, 131); border-radius: 10px;" >
        <h3 class="title col s12 m12 l12">Listado Eventos </h3>
        <ul class="collapsible popout col l10 offset-l1" data-collapsible="accordion" id="eventobusqueda">
              <?php  $_smarty_tpl->tpl_vars['evento'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['evento']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['eventos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['evento']->key => $_smarty_tpl->tpl_vars['evento']->value){
$_smarty_tpl->tpl_vars['evento']->_loop = true;
?>  
               
                   
                    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
<?php $_tmp3=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['evento']->value['usuario']==$_tmp3){?>
                           <li>
                   
                                <div class="collapsible-header row" style="color: rgb(47, 118, 124)">
                                    <h5 class="title"><?php echo $_smarty_tpl->tpl_vars['evento']->value['nombre'];?>
</h5>
                                    <div class="col l9">
                                        <div>
                                            <strong style="color: #2C3E50">Fecha: </strong> <?php echo $_smarty_tpl->tpl_vars['evento']->value['fecha_ini'];?>

                                        </div>

                                        <div>
                                            <strong style="color: #2C3E50">Lugar: </strong> <?php echo $_smarty_tpl->tpl_vars['evento']->value['lugar'];?>

                                        </div>

                                        <div>
                                            <strong style="color: #2C3E50;">Categoria: </strong> <?php echo $_smarty_tpl->tpl_vars['evento']->value['categoria'];?>

                                        </div>
                                    </div>

                                    <div class="col l3">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['layoutParametros']->value['root'];?>
eventos/editarEvento/editar/<?php echo $_smarty_tpl->tpl_vars['evento']->value['id_evento'];?>
" class="waves-effect waves-light btn " style="background-color: #337ab7;min-width: 160px;"> Editar</a>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['layoutParametros']->value['root'];?>
confirmar/delete/<?php echo $_smarty_tpl->tpl_vars['evento']->value['id_evento'];?>
" class="waves-effect waves-light btn" style =" background-color: rgb(236, 52, 52);min-width: 160px;"> Eliminar</a> 
                                    </div>

                                </div>

                            <div class="collapsible-body white">
                                <p style="color: #2C3E50"><?php echo $_smarty_tpl->tpl_vars['evento']->value['descripcion'];?>
</p>
                            </div>
                        </li>
                
                    <?php }else{ ?>
                            <li>
                   
                                <div class="collapsible-header row" style="color: rgb(47, 118, 124)">
                                    <h5 class="title"><?php echo $_smarty_tpl->tpl_vars['evento']->value['nombre'];?>
</h5>
                                    <div class="col l9">
                                        <div>
                                            <strong style="color: #2C3E50">Fecha: </strong> <?php echo $_smarty_tpl->tpl_vars['evento']->value['fecha_ini'];?>

                                        </div>

                                        <div>
                                            <strong style="color: #2C3E50">Lugar: </strong> <?php echo $_smarty_tpl->tpl_vars['evento']->value['lugar'];?>

                                        </div>

                                        <div>
                                            <strong style="color: #2C3E50;">Categoria: </strong> <?php echo $_smarty_tpl->tpl_vars['evento']->value['categoria'];?>

                                        </div>
                                    </div>

                                    <div class="col l3">
                                        <a href="#" class="secondary-content "><i class="mdi-action-assignment-ind"></i> Asistiré</a>
                                        <a href="/whatido/eventos/buscarEvento/info/<?php echo $_smarty_tpl->tpl_vars['evento']->value['id_evento'];?>
" class="secondary-content"><i class="mdi-action-assignment"></i> Ver Mas</a> 
                                    </div>

                                </div>

                            <div class="collapsible-body white">
                                <p style="color: #2C3E50"><?php echo $_smarty_tpl->tpl_vars['evento']->value['descripcion'];?>
</p>
                            </div>
                        </li>
                    <?php }?>
             
             <?php } ?>
        </ul>
    </div>

    <div id="test3"  class="col l10 offset-l1" style="  padding: 20px; background-color: rgb(5, 91, 131); border-radius: 10px;" >

    </div>
</div>

 <?php } ?>
<?php }} ?>