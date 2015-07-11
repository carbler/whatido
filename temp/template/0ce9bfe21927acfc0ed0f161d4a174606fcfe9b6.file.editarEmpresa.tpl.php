<?php /* Smarty version Smarty-3.1.8, created on 2015-07-06 06:57:43
         compiled from "/opt/lampp/htdocs/whatido/modulos/usuarios/vistas/editarPerfil/editarEmpresa.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1372142289558c22679b7cb4-67675877%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ce9bfe21927acfc0ed0f161d4a174606fcfe9b6' => 
    array (
      0 => '/opt/lampp/htdocs/whatido/modulos/usuarios/vistas/editarPerfil/editarEmpresa.tpl',
      1 => 1436158659,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1372142289558c22679b7cb4-67675877',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_558c2267a2c7e5_27320206',
  'variables' => 
  array (
    'perfil' => 0,
    'layoutParametros' => 0,
    'mensaje' => 0,
    'error' => 0,
    'datos_empresa' => 0,
    'empresa' => 0,
    'departamentos' => 0,
    'departamento' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558c2267a2c7e5_27320206')) {function content_558c2267a2c7e5_27320206($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['empresa'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['empresa']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['perfil']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['empresa']->key => $_smarty_tpl->tpl_vars['empresa']->value){
$_smarty_tpl->tpl_vars['empresa']->_loop = true;
?>
 <section class="ventana_emergente">
    <!--Fondo Oscuro Vista-->
    <div class="fondo">

        <!--Contenedor De Formularios-->
        <div class="row">
            <div class=" cajon col  m10 l10 offset-m1 offset-l1">
                <!--Boton Para Regresar-->
                <div class="col s12 m12 l12">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['layoutParametros']->value['root'];?>
usuarios/perfil/info/<?php echo session::getClaveSession("id_usuario");?>
" class="btn-cerrar"><i class="mdi-action-highlight-remove""></i> </a>
                </div>

                <div class="col l12">
                    <!--alerta de mensajes-->
                    <?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)){?>
                        <div id="mensaje"><p><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</p></div>
                    <?php }?>
                </div>


                <div id="test2" class="col s12">
                    <!--contenedor formulario persona-->
                    <div class="col l12">

                        <!--alerta de errores -->
                        <?php if (isset($_smarty_tpl->tpl_vars['error']->value)){?>
                            <div id="error"><p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p></div>
                        <?php }?>

                        <div class="col s12 m12 l12">

                            <form  method="post" class="formulario">
                                <input type="hidden" value="1" name="editar_empresa" />
                                <input type="hidden"  value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos_empresa']->value['index_dpto'])===null||$tmp==='' ? "0" : $tmp);?>
" name="index_dpto" />
                                <input type="hidden"  value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos_empresa']->value['index_ciudad'])===null||$tmp==='' ? "0" : $tmp);?>
" name="index_ciudad" />
                                <input type="hidden"  value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos_empresa']->value['index_naturaleza'])===null||$tmp==='' ? "0" : $tmp);?>
" name="index_naturaleza" />
                                <div class="col s12 m6 l6">

                                    <h4 class="encabezado" ">Información General</h4>

                                    <div class="input-field">
                                        <input id="nombre" type="text" name="nombre" class="validate" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos_empresa']->value['nombre'])===null||$tmp==='' ? ($_smarty_tpl->tpl_vars['empresa']->value['nombre']) : $tmp);?>
">
                                        <label for="nombre">Razón Social</label>
                                    </div>

                                    <div class="input-field">
                                        <input id="sigla" type="text" name="sigla" class="validate" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos_empresa']->value['sigla'])===null||$tmp==='' ? ($_smarty_tpl->tpl_vars['empresa']->value['sigla']) : $tmp);?>
">
                                        <label for="sigla">Sigla</label>
                                    </div>

                                    <div class="input-field">
                                        <select id="naturaleza" name="naturaleza" >
                                            
                                             <option value="<?php echo $_smarty_tpl->tpl_vars['empresa']->value['naturaleza'];?>
"><?php if ($_smarty_tpl->tpl_vars['empresa']->value['naturaleza']=="Privada"){?>Privada <?php }?><?php if ($_smarty_tpl->tpl_vars['empresa']->value['naturaleza']=="Publica"){?>Publica <?php }?><?php if ($_smarty_tpl->tpl_vars['empresa']->value['naturaleza']=="Mixta"){?>Mixta <?php }?>
                                             </option>
                                            <?php if ($_smarty_tpl->tpl_vars['empresa']->value['naturaleza']=="Privada"){?>
                                                  <option value="Publica">Publica</option>
                                                 <option value="Mixta">Mixta</option>
                                         
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['empresa']->value['naturaleza']=="Publica"){?>
                                                  <option value="Publica">Privada</option>
                                                 <option value="Mixta">Mixta</option>
                                         
                                            <?php }?>
                                              <?php if ($_smarty_tpl->tpl_vars['empresa']->value['naturaleza']=="Mixta"){?>
                                                  <option value="Publica">Privada</option>
                                                 <option value="Mixta">Publica</option>
                                         
                                               <?php }?>
                                            
                                           
                                        </select>
                                        <label>Naturaleza</label>
                                    </div>

                                    <h4 class="encabezado">Ubicación</h4>
                                    <div class="input-field ">
                                        <select id="departamentos" name="departamento" onchange="javascript:getCiudades(this.id,'ciudades2')">
                                            <option value="" disabled selected>Seleccione</option>
                                            <?php  $_smarty_tpl->tpl_vars['departamento'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['departamento']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['departamentos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['departamento']->key => $_smarty_tpl->tpl_vars['departamento']->value){
$_smarty_tpl->tpl_vars['departamento']->_loop = true;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['departamento']->value['id_departamento'];?>
"><?php echo $_smarty_tpl->tpl_vars['departamento']->value['nombre'];?>
</option>
                                            <?php } ?>
                                        </select>
                                        <label>Departamento</label>
                                    </div>

                                    <div class="input-field ">
                                        <select id="ciudades" name="ubicacion" >
                                            <option value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos_empresa']->value['ubicacion'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['empresa']->value['ubicacion'] : $tmp);?>
" class="active"><?php echo $_smarty_tpl->tpl_vars['empresa']->value['ciudad'];?>
</option>
                                        </select>
                                        <label>lugar Recidencia</label>
                                    </div>
                                </div>

                                <div class="col s12 m6 l6">
                                    <h4 class="encabezado">Información Contacto</h4>

                                    <div class="input-field">
                                        <input id="contacto" type="text" name="contacto" class="validate" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos_empresa']->value['contacto'])===null||$tmp==='' ? ($_smarty_tpl->tpl_vars['empresa']->value['nombre_contacto']) : $tmp);?>
">
                                        <label for="contacto">Nombre Asesor</label>
                                    </div>

                                    <div class="input-field">
                                        <input id="telefono" type="text" name="telefono" class="validate" pattern='[0-9]<?php echo '{7,10}';?>
' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos_empresa']->value['telefono'])===null||$tmp==='' ? ($_smarty_tpl->tpl_vars['empresa']->value['telefono']) : $tmp);?>
">
                                        <label for="telefono">telefono</label>
                                    </div>

                                    <div class="input-field">
                                        <input id="celular" type="text" name="celular" class="validate" pattern='[0-9]<?php echo '{7,10}';?>
' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos_empresa']->value['celular'])===null||$tmp==='' ? ($_smarty_tpl->tpl_vars['empresa']->value['cel']) : $tmp);?>
">
                                        <label for="celular">celular</label>
                                    </div>

                                    <div class="input-field">
                                        <input id="direccion" type="text" name="direccion" class="validate" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos_empresa']->value['direccion'])===null||$tmp==='' ? ($_smarty_tpl->tpl_vars['empresa']->value['direccion']) : $tmp);?>
">
                                        <label for="direccion">Direccion</label>
                                    </div>

                                    <div class="input-field">
                                        <input id="web" type="text" name="web_site" class="validate" placeholder="http://ejemplo.xxx" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos_empresa']->value['web_site'])===null||$tmp==='' ? ($_smarty_tpl->tpl_vars['empresa']->value['web_site']) : $tmp);?>
">
                                        <label for="web">Pagina Web</label>
                                    </div>

                                </div>

                                <h4 class="encabezado col l12" ">Cuentanos Hacerca De Ti</h4>

                                <div class="input-field col s12 m12 l12">
                                    <textarea id="descripcion" class="materialize-textarea" name="descripcion"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos_empresa']->value['descripcion'])===null||$tmp==='' ? ($_smarty_tpl->tpl_vars['empresa']->value['descripcion']) : $tmp);?>
</textarea>
                                    <label for="descripcion">Acerca De Mi</label>
                                </div>

                                <input type="submit" value="Listo" class="btn boton right" />
                            </form>

                        </div>
                    </div>
                </div>

    </div>
</section>


 <?php } ?>
<?php }} ?>