
{foreach from=$perfil item=empresa}
 <section class="ventana_emergente">
    <!--Fondo Oscuro Vista-->
    <div class="fondo">

        <!--Contenedor De Formularios-->
        <div class="row">
            <div class=" cajon col  m10 l10 offset-m1 offset-l1">
                <!--Boton Para Regresar-->
                <div class="col s12 m12 l12">
                    <a href="{$layoutParametros.root}usuarios/perfil/info/{session::getClaveSession("id_usuario")}" class="btn-cerrar"><i class="mdi-action-highlight-remove""></i> </a>
                </div>

                <div class="col l12">
                    <!--alerta de mensajes-->
                    {if isset($mensaje)}
                        <div id="mensaje"><p>{$mensaje}</p></div>
                    {/if}
                </div>


                <div id="test2" class="col s12">
                    <!--contenedor formulario persona-->
                    <div class="col l12">

                        <!--alerta de errores -->
                        {if isset($error)}
                            <div id="error"><p>{$error}</p></div>
                        {/if}

                        <div class="col s12 m12 l12">

                            <form  method="post" class="formulario">
                                <input type="hidden" value="1" name="editar_empresa" />
                                <input type="hidden"  value="{$datos_empresa.index_dpto|default:"0"}" name="index_dpto" />
                                <input type="hidden"  value="{$datos_empresa.index_ciudad|default:"0"}" name="index_ciudad" />
                                <input type="hidden"  value="{$datos_empresa.index_naturaleza|default:"0"}" name="index_naturaleza" />
                                <div class="col s12 m6 l6">

                                    <h4 class="encabezado" ">Información General</h4>

                                    <div class="input-field">
                                        <input id="nombre" type="text" name="nombre" class="validate" value="{$datos_empresa.nombre|default:"{$empresa.nombre}"}">
                                        <label for="nombre">Razón Social</label>
                                    </div>

                                    <div class="input-field">
                                        <input id="sigla" type="text" name="sigla" class="validate" value="{$datos_empresa.sigla|default:"{$empresa.sigla}"}">
                                        <label for="sigla">Sigla</label>
                                    </div>

                                    <div class="input-field">
                                        <select id="naturaleza" name="naturaleza" >
                                            
                                             <option value="{$empresa.naturaleza}">{if $empresa.naturaleza eq "Privada"}Privada {/if}{if $empresa.naturaleza eq "Publica"}Publica {/if}{if $empresa.naturaleza eq "Mixta"}Mixta {/if}
                                             </option>
                                            {if $empresa.naturaleza eq "Privada"}
                                                  <option value="Publica">Publica</option>
                                                 <option value="Mixta">Mixta</option>
                                         
                                            {/if}
                                            {if $empresa.naturaleza eq "Publica"}
                                                  <option value="Publica">Privada</option>
                                                 <option value="Mixta">Mixta</option>
                                         
                                            {/if}
                                              {if $empresa.naturaleza eq "Mixta"}
                                                  <option value="Publica">Privada</option>
                                                 <option value="Mixta">Publica</option>
                                         
                                               {/if}
                                            
                                           
                                        </select>
                                        <label>Naturaleza</label>
                                    </div>

                                    <h4 class="encabezado">Ubicación</h4>
                                    <div class="input-field ">
                                        <select id="departamentos" name="departamento" onchange="javascript:getCiudades(this.id,'ciudades2')">
                                            <option value="" disabled selected>Seleccione</option>
                                            {foreach from=$departamentos item=departamento}
                                                <option value="{$departamento.id_departamento}">{$departamento.nombre}</option>
                                            {/foreach}
                                        </select>
                                        <label>Departamento</label>
                                    </div>

                                    <div class="input-field ">
                                        <select id="ciudades" name="ubicacion" >
                                            <option value="{$datos_empresa.ubicacion|default:$empresa.ubicacion}" class="active">{$empresa.ciudad}</option>
                                        </select>
                                        <label>lugar Recidencia</label>
                                    </div>
                                </div>

                                <div class="col s12 m6 l6">
                                    <h4 class="encabezado">Información Contacto</h4>

                                    <div class="input-field">
                                        <input id="contacto" type="text" name="contacto" class="validate" value="{$datos_empresa.contacto|default:"{$empresa.nombre_contacto}"}">
                                        <label for="contacto">Nombre Asesor</label>
                                    </div>

                                    <div class="input-field">
                                        <input id="telefono" type="text" name="telefono" class="validate" pattern='[0-9]{'{7,10}'}' value="{$datos_empresa.telefono|default:"{$empresa.telefono}"}">
                                        <label for="telefono">telefono</label>
                                    </div>

                                    <div class="input-field">
                                        <input id="celular" type="text" name="celular" class="validate" pattern='[0-9]{'{7,10}'}' value="{$datos_empresa.celular|default:"{$empresa.cel}"}">
                                        <label for="celular">celular</label>
                                    </div>

                                    <div class="input-field">
                                        <input id="direccion" type="text" name="direccion" class="validate" value="{$datos_empresa.direccion|default:"{$empresa.direccion}"}">
                                        <label for="direccion">Direccion</label>
                                    </div>

                                    <div class="input-field">
                                        <input id="web" type="text" name="web_site" class="validate" placeholder="http://ejemplo.xxx" value="{$datos_empresa.web_site|default:"{$empresa.web_site}"}">
                                        <label for="web">Pagina Web</label>
                                    </div>

                                </div>

                                <h4 class="encabezado col l12" ">Cuentanos Hacerca De Ti</h4>

                                <div class="input-field col s12 m12 l12">
                                    <textarea id="descripcion" class="materialize-textarea" name="descripcion">{$datos_empresa.descripcion|default:"{$empresa.descripcion}"}</textarea>
                                    <label for="descripcion">Acerca De Mi</label>
                                </div>

                                <input type="submit" value="Listo" class="btn boton right" />
                            </form>

                        </div>
                    </div>
                </div>

    </div>
</section>


 {/foreach}
