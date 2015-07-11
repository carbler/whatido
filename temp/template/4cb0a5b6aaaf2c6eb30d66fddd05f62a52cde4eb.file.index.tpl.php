<?php /* Smarty version Smarty-3.1.8, created on 2015-06-24 06:48:05
         compiled from "C:\xampp\htdocs\whatido\vistas\index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25856558a368556c7c2-28156309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cb0a5b6aaaf2c6eb30d66fddd05f62a52cde4eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\whatido\\vistas\\index\\index.tpl',
      1 => 1435067926,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25856558a368556c7c2-28156309',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'departamentos' => 0,
    'departamento' => 0,
    'categorias' => 0,
    'cat' => 0,
    'video' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_558a3685699482_93003881',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558a3685699482_93003881')) {function content_558a3685699482_93003881($_smarty_tpl) {?><!--video Para vista Inicial-->
<!--alerta de mensajes-->

<div class="not-video" id="index">
    <div class="row apsolute-med-and-up" >
        <?php if (isset($_smarty_tpl->tpl_vars['error']->value)){?>
            <div id="error"><p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p></div>
        <?php }?>
        <div class="col m4 l6 cont-dark cont-search-event">
            <p>Busqueda De Eventos</p>
                <form>
                    <div class="row">

                        <div class="input-field col s12 m12 l4">
                            <label style="margin-top: -24px; font-size: 12px;">Fecha</label>
                            <input placeholder="DD/MM/AAAA" id="fecha_busqueda" type="date" >
                        </div>

                        <div class="input-field col s12 m12 l4">
                            <select id="departamentos" name="departamento">
                                <option value="" >Seleccione</option>
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

                        <div class="input-field col s12 m12 l4">
                            <select id="ciudades_busqueda" name="ciudad_evento" >
                                    <option value="" disabled selected>Seleccione</option>
                            </select>
                            <label>Selecciona Una ciudad</label>
                            </select>
                        </div>


                        <div class="input-field col s12 m12 l6">
                            <select id="categoria_busqueda" name="categoria_evento">
                                <option value="" >Seleccione</option>
                                <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['id_categoria'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['nombre'];?>
</option>
                                <?php } ?>
                            </select>
                            <label>Selecciona Una Categoria</label>
                        </div>

                        <p class="col m6 l4" >
                            <input type="checkbox" id="gratis_busqueda" name="gratis_busqueda"   />
                            <label for="gratis_busqueda" style="margin-top: 12px;">Solo Eventos Gratis</label>
                        </p>

                       <a  href="#response-event" class="right btn waves-effect waves-light col m6 l2" onclick="javascript:eventosBusqueda()" style="margin-top: 20px; ">Buscar
                            <i class="mdi-content-send right"></i>
                        </a>
                    </div>
                </form>
        </div>

        <div class="col s12 m6 l5 offset-l1 offset-m1 box-sizing cont-dark cont-event-day">
           <h3>Eventos Del Dia</h3>
            <ul id="eventosdia">
            </ul>
        </div>

    </div>


    <video id="video" class="responsive-video hide-on-small-only" autoplay loop style="margin-top:-65px;">
        <source src="<?php echo $_smarty_tpl->tpl_vars['video']->value;?>
" type="video/mp4">
    </video>
</div>

<section id="response-event" class="row ">



</section>


<?php }} ?>