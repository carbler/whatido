<?php /* Smarty version Smarty-3.1.8, created on 2015-07-06 05:21:44
         compiled from "/opt/lampp/htdocs/whatido/modulos/usuarios/vistas/perfil/persona.tpl" */ ?>
<?php /*%%SmartyHeaderCode:445918165558c1744ced5a9-19953653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d5d31b4417454b56d019b01a58493923047a544' => 
    array (
      0 => '/opt/lampp/htdocs/whatido/modulos/usuarios/vistas/perfil/persona.tpl',
      1 => 1436152902,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '445918165558c1744ced5a9-19953653',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_558c1744d614f7_31995712',
  'variables' => 
  array (
    'persona' => 0,
    'person' => 0,
    'usuario' => 0,
    'layoutParametros' => 0,
    'eventos' => 0,
    'evento' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558c1744d614f7_31995712')) {function content_558c1744d614f7_31995712($_smarty_tpl) {?>  <?php  $_smarty_tpl->tpl_vars['person'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['person']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['persona']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['person']->key => $_smarty_tpl->tpl_vars['person']->value){
$_smarty_tpl->tpl_vars['person']->_loop = true;
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
             <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['person']->value['usuario'];?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp1==$_tmp2){?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['layoutParametros']->value['root'];?>
usuarios/editarPerfil/edit/<?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
" class="waves-effect waves-light btn" style =" background-color: rgb(236, 52, 52);min-width: 160px;"> Editar Perfil</a> 
             <?php }?>
            <p style="color: #ffffff;"><strong style="color: #5cbfff">Información Registrada: </strong><?php echo $_smarty_tpl->tpl_vars['person']->value['create_on'];?>
</p>
            <p style="color: #ffffff"><strong style="color: #5cbfff">Ultima Actualización:</strong> <?php echo $_smarty_tpl->tpl_vars['person']->value['change_on'];?>
</p>

        </div>
        <div class= "col s12 l5 box-write">
            <h3 class="title"> <i class="big mdi-action-account-circle"></i><?php echo $_smarty_tpl->tpl_vars['person']->value['nombre1'];?>
 <?php echo $_smarty_tpl->tpl_vars['person']->value['nombre2'];?>
 <?php echo $_smarty_tpl->tpl_vars['person']->value['apellido1'];?>
 <?php echo $_smarty_tpl->tpl_vars['person']->value['apellido2'];?>
</h3>
            <p><strong>Nombre Usuario: </strong><?php echo $_smarty_tpl->tpl_vars['person']->value['nombre1'];?>
 <?php echo $_smarty_tpl->tpl_vars['person']->value['nombre2'];?>
 <?php echo $_smarty_tpl->tpl_vars['person']->value['apellido1'];?>
 <?php echo $_smarty_tpl->tpl_vars['person']->value['apellido2'];?>
</p>
            <p><strong>Fecha Nacimiento: </strong> <?php echo $_smarty_tpl->tpl_vars['person']->value['fecha_nac'];?>
</p>
            <p><strong>Genero: </strong> <?php if ($_smarty_tpl->tpl_vars['person']->value['genero']=='M'){?>Masculino<?php }else{ ?>Femenino<?php }?></p>
            <p><strong>Ocupación: </strong> <?php echo $_smarty_tpl->tpl_vars['person']->value['ocupacion'];?>
</p>
             <p><strong>Lugar de Residencia: </strong> <?php echo $_smarty_tpl->tpl_vars['person']->value['ciudad'];?>
</p>
        </div>
        <div class="col s12 l6 offset-l1 box-write">
            <h3 class="title">Acerca De Mi</h3>
            <p><?php echo $_smarty_tpl->tpl_vars['person']->value['descripcion'];?>
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
                                        <a href="#" class="secondary-content"><i class="mdi-action-assignment-ind"></i> Asistiré</a>
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
      
      
 <?php } ?><?php }} ?>