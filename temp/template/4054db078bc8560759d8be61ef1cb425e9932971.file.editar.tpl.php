<?php /* Smarty version Smarty-3.1.8, created on 2015-07-06 05:27:01
         compiled from "/opt/lampp/htdocs/whatido/modulos/eventos/vistas/editarEvento/editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1262553473558c29560fd362-51127136%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4054db078bc8560759d8be61ef1cb425e9932971' => 
    array (
      0 => '/opt/lampp/htdocs/whatido/modulos/eventos/vistas/editarEvento/editar.tpl',
      1 => 1436140111,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1262553473558c29560fd362-51127136',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_558c29561af821_12195873',
  'variables' => 
  array (
    'evento' => 0,
    'layoutParametros' => 0,
    'mensaje' => 0,
    'error' => 0,
    'datos_evento' => 0,
    'event' => 0,
    'categorias' => 0,
    'cat' => 0,
    'departamentos' => 0,
    'departamento' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558c29561af821_12195873')) {function content_558c29561af821_12195873($_smarty_tpl) {?><!--Fondo Oscuro Vista-->

<?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['evento']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value){
$_smarty_tpl->tpl_vars['event']->_loop = true;
?>
<div class="fondo">

    <!--Contenedor De Formularios-->
    <div class="row">
    <div class="cajon col  m10 l6 offset-m1 offset-l3">
        <!--Boton Para Regresar-->
        <div class="col s12 m12 l12">
           <a href="<?php echo $_smarty_tpl->tpl_vars['layoutParametros']->value['root'];?>
usuarios/perfil/info/<?php echo session::getClaveSession("id_usuario");?>
" class="btn-cerrar"><i class="mdi-action-highlight-remove"></i> </a>
        </div>

        <div class="col l12">
            <!--alerta de mensajes-->
            <?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)){?>
                <div id="mensaje"><p><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</p></div>
            <?php }?>
        </div>

        <!--contenedor formulario eventos-->
        <div class="col l12 s12 m10 offset-m1">

            <!--alerta de errores -->
            <?php if (isset($_smarty_tpl->tpl_vars['error']->value)){?>
                <div id="error"><p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p></div>
            <?php }?>

         

            <!--contenedor formulario registro-->
            <div class="col s12 m12 l12 ">

                <!--titulo formulario-->
                <h4 class="encabezado center" >Editar Evento</h4>

                <!--formulario ingreso-->
                <form  method="post" class="formulario" >
                    <input type="hidden" value="1" name="editar_evento" />
                    <input type="hidden" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos_evento']->value['index_categoria'])===null||$tmp==='' ? "0" : $tmp);?>
" name="index_categoria" />
                    <input type="hidden" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos_evento']->value['index_dpto'])===null||$tmp==='' ? "0" : $tmp);?>
"      name="index_dpto" />
                    <input type="hidden" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos_evento']->value['index_ciudad'])===null||$tmp==='' ? "0" : $tmp);?>
"    name="index_ciudad" />
                    

                            <div class="input-field">
                                <i class="mdi-action-stars prefix"></i>
                                <input id="nombre_evento" required type="text" name="nombre_evento" class="validate" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos_evento']->value['nombre_evento'])===null||$tmp==='' ? ($_smarty_tpl->tpl_vars['event']->value['nombre'])." " : $tmp);?>
">
                                <label for="nombre_evento">¿Como se llama tu evento?</label> 
                            </div>
                   
                            <div class="input-field ">

                                <select id="categoria" name="categoria_evento" value="<?php echo $_smarty_tpl->tpl_vars['evento']->value['id_categoria'];?>
" >
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['event']->value['id_categoria'];?>
"><?php echo $_smarty_tpl->tpl_vars['event']->value['categoria'];?>
</option>
                                    <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['cat']->value['id_categoria']!=$_smarty_tpl->tpl_vars['event']->value['id_categoria']){?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['id_categoria'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['nombre'];?>
</option>
                                        <?php }?>
                                    <?php } ?>
                                    </select>
                                <label>Selecciona Una Categoria</label>
                            </div>
                                    
                                  
                             <div class="input-field ">
                                <select id="departamentos" name="departamento">
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

                             <div class="input-field">
                                 <select id="ciudades" name="ciudad_evento" >
                                     <option value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos_evento']->value['ciudad_evento'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['event']->value['id_ciudad'] : $tmp);?>
" class="active"><?php echo $_smarty_tpl->tpl_vars['event']->value['ciudad'];?>
</option>
                                </select>
                                <label>Selecciona Una ciudad</label>
                            </div>


                    <div class="input-field" >
                                <i class="mdi-maps-directions prefix"></i>
                                <input id="direccion_evento" required type="text" name="direccion_evento" class="validate" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos_evento']->value['direccion_evento'])===null||$tmp==='' ? ($_smarty_tpl->tpl_vars['event']->value['direccion']) : $tmp);?>
">
                                <label for="direccion_evento">¿Cual es la direccion del evento?</label>
                            </div>     
                             <div class="input-field">
                                <i class="mdi-maps-store-mall-directory prefix"></i>
                                <input id="lugar_evento" required type="text" name="lugar_evento" class="validate" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos_evento']->value['lugar_evento'])===null||$tmp==='' ? ($_smarty_tpl->tpl_vars['event']->value['lugar']) : $tmp);?>
">
                                <label for="lugar_evento">¿Cual es el nombre del lugar?</label>
                             </div>
                        
                             <label class="col s6 center" >Fecha de inicio del evento </label>
                              <label class="col s6 center" >Fecha final del evento</label>
                       
                         <!--contenedor fechas eventos-->
                    
                           
                            <div class="input-field col s6" >
                            
                                 <input type="date" required class="datepicker" id="fecha_ini" name="fecha_ini" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos_evento']->value['fecha_ini'])===null||$tmp==='' ? ($_smarty_tpl->tpl_vars['event']->value['fecha_ini']) : $tmp);?>
">
                              
                            </div>
                            <div class="input-field col s6">
                            
                                  <input type="date" required  class="datepicker" id="fecha_fin" name="fecha_fin" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos_evento']->value['fecha_fin'])===null||$tmp==='' ? ($_smarty_tpl->tpl_vars['event']->value['fecha_fin']) : $tmp);?>
">
                              
                            </div>
                        
                          <label class="col s6 center" >Hora de inicio del evento </label>
                          <label class="col s6 center" >Hora  final del evento</label>
                       
                         <!--contenedor horas eventos-->
                          <div class="row">
                           
                                    <div class="input-field col s6" >

                                    <input type="time"  id="hora_ini" required name="hora_ini" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos_evento']->value['hora_ini'])===null||$tmp==='' ? ($_smarty_tpl->tpl_vars['event']->value['hora_ini']) : $tmp);?>
">

                                    </div>
                                    <div class="input-field col s6">

                                    <input type="time" id="hora_fin"  required name="hora_fin" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos_evento']->value['hora_fin'])===null||$tmp==='' ? ($_smarty_tpl->tpl_vars['event']->value['hora_fin']) : $tmp);?>
">

                                    </div>
                          </div>
                         
                         
                               <div class="input-field">
                                    <i class="mdi-notification-phone-in-talk prefix"></i>
                                    <input id="tele_evento"  required type="number"  name="tel_evento" class="validate" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos_evento']->value['tel_evento'])===null||$tmp==='' ? ($_smarty_tpl->tpl_vars['event']->value['telefono']) : $tmp);?>
">
                                    <label for="tele_evento">¿Numero de telefono para contacto?</label>
                                </div>
                                    <div class="input-field ">                            
                                    <i class="mdi-social-public prefix"></i>
                                    <input type="url" name="web_evento"  value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos_evento']->value['web_evento'])===null||$tmp==='' ? ($_smarty_tpl->tpl_vars['event']->value['web_site']) : $tmp);?>
">
                                    <label for="web_evento">¿Tu evento tiene un website?</label>
                                     </div>
                                <div class="input-field ">
                                    <i class="mdi-communication-email prefix"></i>
                                    <input id="mail_evento"  required type="email" class="validate" name="email_evento" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos_evento']->value['email_evento'])===null||$tmp==='' ? ($_smarty_tpl->tpl_vars['event']->value['email']) : $tmp);?>
">
                                    <label for="mail_evento">Correo Electronico</label>
                                </div>
                        
                                <div class="input-field col s12">

                                      <i class="mdi-hardware-keyboard-alt prefix"></i>
                                     <textarea id="descripcion_evento" required class="materialize-textarea" name="descripcion_evento" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos_evento']->value['descripcion_evento'])===null||$tmp==='' ? '' : $tmp);?>
"><?php echo $_smarty_tpl->tpl_vars['event']->value['descripcion'];?>
</textarea>
                                     <label for="descripcion_evento">¡Cuentanos de que trata tu evento!</label>
                                    </div>
                                  <div class="input-field col s12">
                                      <i class="mdi-editor-attach-money prefix"></i>
                                      <input type="number"  required id="valor_evento"name="valor_evento" min="0"  value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos_evento']->value['valor_evento'])===null||$tmp==='' ? ($_smarty_tpl->tpl_vars['event']->value['valor']) : $tmp);?>
" >
                                      <label for="valor_evento">Cover (En pesos $ colombianos)</label>
                                  </div>
                    <div class="col l12 right-align">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['layoutParametros']->value['root'];?>
public/terminos_condiciones.html">Ver Terminos Y Condiciones</a>
                    </div>

                    <input type="submit" value="Editar Evento" class="btn boton right"/>

              </form>
            </div>

        </div>
    </div>
    </div>
</div>
 <?php } ?><?php }} ?>