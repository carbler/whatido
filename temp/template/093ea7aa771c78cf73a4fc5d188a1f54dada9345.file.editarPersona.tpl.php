<?php /* Smarty version Smarty-3.1.8, created on 2015-07-06 05:44:22
         compiled from "/opt/lampp/htdocs/whatido/modulos/usuarios/vistas/editarPerfil/editarPersona.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1149477093558c22587ad159-66518552%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '093ea7aa771c78cf73a4fc5d188a1f54dada9345' => 
    array (
      0 => '/opt/lampp/htdocs/whatido/modulos/usuarios/vistas/editarPerfil/editarPersona.tpl',
      1 => 1436154259,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1149477093558c22587ad159-66518552',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_558c22588419e0_01242452',
  'variables' => 
  array (
    'perfil' => 0,
    'layoutParametros' => 0,
    'mensaje' => 0,
    'error' => 0,
    'datos_persona' => 0,
    'persona' => 0,
    'departamentos' => 0,
    'departamento' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558c22588419e0_01242452')) {function content_558c22588419e0_01242452($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['persona'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['persona']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['perfil']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['persona']->key => $_smarty_tpl->tpl_vars['persona']->value){
$_smarty_tpl->tpl_vars['persona']->_loop = true;
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

              

                <div id="test1" class="col s12">
                    <!--contenedor formulario persona-->
                    <div class="col l12">

                        <!--alerta de errores -->
                        <?php if (isset($_smarty_tpl->tpl_vars['error']->value)){?>
                            <div id="error"><p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p></div>
                        <?php }?>

                        <div class="col s12 m12 l12">

                            <form  method="post" class="formulario">
                                <input type="hidden" value="1" name="editar_persona" />
                                <input type="hidden" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos_persona']->value['index_ocupacion'])===null||$tmp==='' ? "0" : $tmp);?>
" name="index_ocupacion" />
                                <input type="hidden" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos_persona']->value['index_dpto'])===null||$tmp==='' ? "0" : $tmp);?>
" name="index_dpto" />
                                <input type="hidden" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos_persona']->value['index_ciudad'])===null||$tmp==='' ? "0" : $tmp);?>
" name="index_ciudad" />
                                <input type="hidden" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos_persona']->value['index_genero'])===null||$tmp==='' ? "0" : $tmp);?>
" name="index_genero" />
                                <div class="col s12 m6 l6">

                                    <h4 class="encabezado" ">Información General</h4>

                                    <div class="input-field">
                                        <i class="mdi-action-perm-identity prefix"></i>
                                        <input id="primer_nombre" type="text" name="primer_nombre" class="validate" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos_persona']->value['primer_nombre'])===null||$tmp==='' ? ($_smarty_tpl->tpl_vars['persona']->value['nombre1']) : $tmp);?>
">
                                        <label for="primer_nombre">Primer Nombre</label>
                                    </div>

                                    <div class="input-field">
                                        <i class="mdi-action-perm-identity prefix"></i>
                                        <input id="segundo_nombre" type="text" name="segundo_nombre" class="validate" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos_persona']->value['segundo_nombre'])===null||$tmp==='' ? ($_smarty_tpl->tpl_vars['persona']->value['nombre2']) : $tmp);?>
">
                                        <label for="segundo_nombre">Segundo Nombre</label>
                                    </div>

                                    <div class="input-field">
                                        <i class="mdi-action-perm-identity prefix"></i>
                                        <input id="primer_apellido" type="text" name="primer_apellido" class="validate" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos_persona']->value['primer_apellido'])===null||$tmp==='' ? ($_smarty_tpl->tpl_vars['persona']->value['apellido1']) : $tmp);?>
">
                                        <label for="primer_apellido">Primer Apellido</label>
                                    </div>

                                    <div class="input-field">
                                        <i class="mdi-action-perm-identity prefix"></i>
                                        <input id="segundo_apellido" type="text" name="segundo_apellido" class="validate" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos_persona']->value['segundo_apellido'])===null||$tmp==='' ? ($_smarty_tpl->tpl_vars['persona']->value['apellido2']) : $tmp);?>
">
                                        <label for="segundo_apellido">Segundo Apellido</label>
                                    </div>
                                </div>

                                <div class="col s12 m6 l6">
                                    <h4 class="encabezado" ">Información Personal</h4>
                                    <div class="input-field " >
                                        <label style="  position: absolute;top: -14px; font-size: 0.8rem;" >Fecha de Nacimiento </label>
                                        <input type="date" required class="datepicker" id="fecha_nac" name="fecha_nac" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos_persona']->value['fecha_nac'])===null||$tmp==='' ? ($_smarty_tpl->tpl_vars['persona']->value['fecha_nac']) : $tmp);?>
">
                                    </div>

                                    <div class="input-field">
                                        <select id="genero" name="genero" >
                                             <option value="<?php echo $_smarty_tpl->tpl_vars['persona']->value['genero'];?>
"><?php if ($_smarty_tpl->tpl_vars['persona']->value['genero']=="M"){?>Masculino
                                                 <?php }else{ ?> Femenino
                                                 <?php }?>
                                             </option>
                                            <?php if ($_smarty_tpl->tpl_vars['persona']->value['genero']=="M"){?>
                                                 <option value="F">Femenino</option>
                                            <?php }else{ ?>
                                                <option value="M" >Masculino</option>
                                            <?php }?>
                                            
                                        </select>
                                        <label>Género</label>
                                    </div>

                                    <div class="input-field">
                                        <select id="ocupacion"name="ocupacion">
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['persona']->value['ocupacion'];?>
"><?php echo $_smarty_tpl->tpl_vars['persona']->value['ocupacion'];?>
</option>
                                            <option value='Acuicultura' >Acuicultura </option>
                                            <option value='Administración aeronáutica' >Administración aeronáutica </option>
                                            <option value='Administración agropecuaria' >Administración agropecuaria </option>
                                            <option value='Administración de aerolíneas' >Administración de aerolíneas </option>
                                            <option value='Administración de bienes raíces' >Administración de bienes raíces </option>
                                            <option value='Administración de empresas' >Administración de empresas </option>
                                            <option value='Administración de negocios' >Administración de negocios </option>
                                            <option value='Administración de obras civiles' >Administración de obras civiles </option>
                                            <option value='Administración de personal' >Administración de personal </option>
                                            <option value='Administración de seguros' >Administración de seguros </option>
                                            <option value='Administración de servicios' >Administración de servicios </option>
                                            <option value='Administración de sistemas informáticos' >Administración de sistemas informáticos </option>
                                            <option value='Administración de transporte' >Administración de transporte </option>
                                            <option value='Administración financiera' >Administración financiera </option>
                                            <option value='Administración hospitalaria' >Administración hospitalaria </option>
                                            <option value='Administración industrial' >Administración industrial </option>
                                            <option value='Administración pública' >Administración pública </option>
                                            <option value='Administración tributaria' >Administración tributaria </option>
                                            <option value='Administración turística hotelera' >Administración turística hotelera </option>
                                            <option value='Administración uniempresarial' >Administración uniempresarial </option>
                                            <option value='Agrología' >Agrología </option><option value='Agronomía' >Agronomía </option>
                                            <option value='Antropología' >Antropología </option><option value='Arqueología' >Arqueología </option>
                                            <option value='Arquitectura' >Arquitectura </option><option value='Arte y decoración' >Arte y decoración </option>
                                            <option value='Artes plásticas' >Artes plásticas </option><option value='Auxiliar de Vuelo' >Auxiliar de Vuelo </option>
                                            <option value='Bachillerato Académico' >Bachillerato Académico </option><option value='Bachillerato Comercial' >Bachillerato Comercial </option>
                                            <option value='Bachillerato Técnico' >Bachillerato Técnico </option><option value='Bacteriología' >Bacteriología </option>
                                            <option value='Bibliotecología' >Bibliotecología </option><option value='Biología' >Biología </option>
                                            <option value='Biología marina' >Biología marina </option><option value='Ciencias políticas' >Ciencias políticas </option>
                                            <option value='Comercio internacional' >Comercio internacional </option><option value='Comunicación publicitaria' >Comunicación publicitaria </option>
                                            <option value='Comunicación social y periodismo' >Comunicación social y periodismo </option>
                                            <option value='Construcción' >Construcción </option><option value='Contaduría' >Contaduría </option>
                                            <option value='Cultura física deporte y recreación' >Cultura física deporte y recreación </option>
                                            <option value='Derecho Abogado' >Derecho Abogado </option><option value='Despachador' >Despachador </option>
                                            <option value='Diseño de Interiores' >Diseño de Interiores </option>
                                            <option value='Diseño de la comunicación gráfica' >Diseño de la comunicación gráfica </option>
                                            <option value='Diseño de modas y patronaje' >Diseño de modas y patronaje </option>
                                            <option value='Diseño gráfico' >Diseño gráfico </option><option value='Diseño industrial' >Diseño industrial </option>
                                            <option value='Diseño textil' >Diseño textil </option><option value='Docente' >Docente </option>
                                            <option value='Economía' >Economía </option><option value='Enfermería' >Enfermería </option>
                                            <option value='Entomología' >Entomología </option><option value='Estadista' >Estadista </option>
                                            <option value='Estadística' >Estadística </option><option value='Estadístico' >Estadístico </option>
                                            <option value='Filosofía' >Filosofía </option><option value='Finanzas Relaciones internacionales' >Finanzas Relaciones internacionales </option><option value='Física' >Física </option>
                                            <option value='Fisioterapia' >Fisioterapia </option><option value='Fitomejoramiento' >Fitomejoramiento </option>
                                            <option value='Fitopatología' >Fitopatología </option><option value='Fonoaudiología' >Fonoaudiología </option>
                                            <option value='Geografía' >Geografía </option><option value='Geología' >Geología </option>
                                            <option value='Historia' >Historia </option><option value='Hotelería y turismo' >Hotelería y turismo </option>
                                            <option value='Idiomas Lenguas modernas' >Idiomas Lenguas modernas </option>
                                            <option value='Ingeniería administrativa' >Ingeniería administrativa </option>
                                            <option value='Ingeniería Aeronáutica' >Ingeniería Aeronáutica </option>
                                            <option value='Ingeniería agrónoma' >Ingeniería agrónoma </option>
                                            <option value='Ingeniería ambiental  Forestal' >Ingeniería ambiental  Forestal </option>
                                            <option value='Ingeniería biomédica' >Ingeniería biomédica </option>
                                            <option value='Ingeniería catastral  Geodesia' >Ingeniería catastral  Geodesia </option>
                                            <option value='Ingeniería civil' >Ingeniería civil </option>
                                            <option value='Ingeniería de alimentos' >Ingeniería de alimentos </option>
                                            <option value='Ingeniería de Mercados' >Ingeniería de Mercados </option>
                                            <option value='Ingeniería de minas' >Ingeniería de minas </option>
                                            <option value='Ingeniería de Motores' >Ingeniería de Motores </option>
                                            <option value='Ingeniería de petróleos' >Ingeniería de petróleos </option>
                                            <option value='Ingeniería de producción agroindustrial' >Ingeniería de producción agroindustrial </option>
                                            <option value='Ingeniería de redes y telecomunicaciones' >Ingeniería de redes y telecomunicaciones </option>
                                            <option value='Ingeniería de sistemas  Computación' >Ingeniería de sistemas  Computación </option>
                                            <option value='Ingeniería de telecomunicaciones' >Ingeniería de telecomunicaciones </option>
                                            <option value='Ingeniería de transportes y vías' >Ingeniería de transportes y vías </option>
                                            <option value='Ingeniería eléctrica' >Ingeniería eléctrica </option>
                                            <option value='Ingeniería electromecánica' >Ingeniería electromecánica </option>
                                            <option value='Ingeniería electrónica' >Ingeniería electrónica </option>
                                            <option value='Ingeniería física' >Ingeniería física </option>
                                            <option value='Ingeniería industrial' >Ingeniería industrial </option>
                                            <option value='Ingeniería mecánica' >Ingeniería mecánica </option>
                                            <option value='Ingeniería mecatrónica' >Ingeniería mecatrónica </option>
                                            <option value='Ingeniería metalúrgica' >Ingeniería metalúrgica </option>
                                            <option value='Ingeniería naval' >Ingeniería naval </option>
                                            <option value='Ingeniería química' >Ingeniería química </option>
                                            <option value='Ingenieria sanitaria' >Ingenieria sanitaria </option>
                                            <option value='Ingeniería telemática' >Ingeniería telemática </option>
                                            <option value='Licenciaturas' >Licenciaturas </option>
                                            <option value='Literatura' >Literatura </option>
                                            <option value='Matemáticas' >Matemáticas </option>
                                            <option value='Medicina' >Medicina </option>
                                            <option value='Microbiología' >Microbiología </option>
                                            <option value='Música' >Música </option>
                                            <option value='Nutrición y dietética' >Nutrición y dietética </option>
                                            <option value='Oceanografía' >Oceanografía </option>
                                            <option value='Odontología' >Odontología </option>
                                            <option value='Optometría' >Optometría </option>
                                            <option value='Otra' >Otra </option>
                                            <option value='Otros' >Otros </option>
                                            <option value='Pailero' >Pailero </option>
                                            <option value='Piloto' >Piloto </option>
                                            <option value='Preescolar' >Preescolar </option>
                                            <option value='Producción Cine  Televisión' >Producción Cine  Televisión </option>
                                            <option value='Profesional en Gastronomía' >Profesional en Gastronomía </option>
                                            <option value='Profesional en logística' >Profesional en logística </option>
                                            <option value='Psicología' >Psicología </option>
                                            <option value='Publicidad y mercadeo' >Publicidad y mercadeo </option>
                                            <option value='Química' >Química </option>
                                            <option value='Química Farmacéutica' >Química Farmacéutica </option>
                                            <option value='Secretariado' >Secretariado </option>
                                            <option value='Sin Profesión' >Sin Profesión </option>
                                            <option value='Sociología' >Sociología </option>
                                            <option value='Soldador' >Soldador </option>
                                            <option value='Tecn Administración de personal' >Tecn Administración de personal </option>
                                            <option value='Tecn Electricista' >Tecn Electricista </option>
                                            <option value='Tecn Electrónico' >Tecn Electrónico </option>
                                            <option value='Tecn En seguros' >Tecn En seguros </option>
                                            <option value='Tecn Mecánico' >Tecn Mecánico </option>
                                            <option value='Tecn Metalmecánico' >Tecn Metalmecánico </option>
                                            <option value='Tecn Química' >Tecn Química </option>
                                            <option value='Tecn Regencia Farmacia' >Tecn Regencia Farmacia </option>
                                            <option value='Tecn Relaciones Industriales' >Tecn Relaciones Industriales </option>
                                            <option value='Tecn Seguridad industrial' >Tecn Seguridad industrial </option>
                                            <option value='Tecn Sistemas  Computación' >Tecn Sistemas  Computación </option>
                                            <option value='Técnico de Mantenimiento' >Técnico de Mantenimiento </option>
                                            <option value='Técnico en desarrollo y mantenimiento de software' >Técnico en desarrollo y mantenimiento de software </option>
                                            <option value='Técnico en Gestión Contable' >Técnico en Gestión Contable </option>
                                            <option value='Técnico en Gestión Empresarial' >Técnico en Gestión Empresarial </option>
                                            <option value='Técnico en Logística' >Técnico en Logística </option>
                                            <option value='Técnico en radiología e imágenes diagnosticas' >Técnico en radiología e imágenes diagnosticas </option>
                                            <option value='Técnico en salud ocupacional' >Técnico en salud ocupacional </option>
                                            <option value='Tecnología de alimentos' >Tecnología de alimentos </option>
                                            <option value='Tecnología en electrónica' >Tecnología en electrónica </option>
                                            <option value='Terapia ocupacional' >Terapia ocupacional </option>
                                            <option value='Terapia respiratoria' >Terapia respiratoria </option>
                                            <option value='Trabajo social' >Trabajo social </option>
                                            <option value='Tubero' >Tubero </option><option value='Veterinaria' >Veterinaria </option>
                                            <option value='Zootecnia' >Zootecnia </option>
                                        </select>
                                        <label>Profesión u Oficio</label>
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

                                    <div class="input-field ">
                                        <select id="ciudades" name="recidencia" >
                                             <option value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['persona']->value['recidencia'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['persona']->value['recidencia'] : $tmp);?>
" class="active"><?php echo $_smarty_tpl->tpl_vars['persona']->value['ciudad'];?>
</option>

                                        </select>
                                        <label>lugar Recidencia</label>
                                    </div>
                                </div>

                                <h4 class="encabezado">Cuentanos Hacerca De Ti</h4>

                                <div class="input-field col s12 m12 l12">
                                    <textarea id="descripcion" class="materialize-textarea" name="descripcion"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos_persona']->value['descripcion'])===null||$tmp==='' ? ($_smarty_tpl->tpl_vars['persona']->value['descripcion']) : $tmp);?>
</textarea>
                                    <label for="descripcion">Acerca De Mi</label>
                                </div>

                                <input type="submit" value="Listo" class="btn boton right" />
                            </form>

                        </div>
                    </div>

                </div>

               

        </div>
    </div>
</section>

 
 <?php } ?>
<?php }} ?>