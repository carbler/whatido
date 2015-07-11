<!--Fondo Oscuro Vista-->
<div class="fondo">

    <!--Contenedor De Formularios-->
    <div class="row">
    <div class="cajon col  m10 l6 offset-m1 offset-l3">
        <!--Boton Para Regresar-->
        <div class="col s12 m12 l12">
           <a href="{$layoutParametros.root}" class="btn-cerrar"><i class="mdi-action-highlight-remove""></i> </a>
        </div>

        <div class="col l12">
            <!--alerta de mensajes-->
            {if isset($mensaje)}
                <div id="mensaje"><p>{$mensaje}</p></div>
            {/if}
        </div>

        <!--contenedor formulario eventos-->
        <div class="col l12 s12 m10 offset-m1">

            <!--alerta de errores -->
            {if isset($error)}
                <div id="error"><p>{$error}</p></div>
            {/if}

         

            <!--contenedor formulario registro-->
            <div class="col s12 m12 l12 ">

                <!--titulo formulario-->
                <h4 class="encabezado center" >Crear Evento</h4>

                <!--formulario ingreso-->
                <form  method="post" class="formulario" >
                    <input type="hidden" value="1" name="crear_evento" />

                            <div class="input-field">
                                <i class="mdi-action-stars prefix"></i>
                                <input id="nombre_evento" required type="text" name="nombre_evento" class="validate" value="{$datos_evento.nombre_evento|default:""}">
                                <label for="nombre_evento">¿Como se llama tu evento?</label> 
                            </div>
                   
                            <div class="input-field ">

                                <select id="categoria" name="categoria_evento" >
                                <option value="" >Seleccione</option>
                                {foreach from=$categorias item=cat}
                                    <option value="{$cat.id_categoria}">{$cat.nombre}</option>
                                {/foreach}
                                </select>
                                <label>Selecciona Una Categoria</label>
                            </div>

                            <div class="input-field ">

                                <select id="departamentos" >
                                    <option value="" >Seleccione</option>
                                    {foreach from=$departamentos item=dpto}
                                        <option value="{$dpto.id_departamento}">{$dpto.nombre}</option>
                                    {/foreach}
                                </select>
                                <label>Selecciona Un Departamento</label>
                            </div>


                             <div class="input-field">
                                 <select id="ciudades" name="ciudad_evento" >
                                  <option value="" >Seleccione</option>
                                </select>
                                <label>Selecciona Una ciudad</label>
                            </div>

                            <input type="hidden" value="{$datos_evento.index_categoria|default:"0"}" name="index_categoria" />
                            <input type="hidden" value="{$datos_evento.index_dpto|default:"0"}" name="index_dpto" />
                            <input type="hidden" value="{$datos_evento.index_ciudad|default:"0"}" name="index_ciudad" />

                             <div class="input-field" >
                                <i class="mdi-maps-directions prefix"></i>
                                <input id="direccion_evento" required type="text" name="direccion_evento" class="validate" value="{$datos_evento.direccion_evento|default:""}">
                                <label for="direccion_evento">¿Cual es la direccion del evento?</label>
                            </div>     
                             <div class="input-field">
                                <i class="mdi-maps-store-mall-directory prefix"></i>
                                <input id="lugar_evento" required type="text" name="lugar_evento" class="validate" value="{$datos_evento.lugar_evento|default:""}">
                                <label for="lugar_evento">¿Cual es el nombre del lugar?</label>
                             </div>
                        
                             <label class="col s6 center" >Fecha de inicio del evento </label>
                              <label class="col s6 center" >Fecha final del evento</label>
                       
                         <!--contenedor fechas eventos-->
                    
                           
                            <div class="input-field col s6" >
                                 <input type="date" required class="datepicker" id="fecha_ini" name="fecha_ini" value="{$datos_evento.fecha_ini|default:""}">
                            </div>

                            <div class="input-field col s6">
                                  <input type="date" required  class="datepicker" id="fecha_fin" name="fecha_fin" value="{$datos_evento.fecha_fin|default:""}">
                            </div>
                        
                          <label class="col s6 center" >Hora de inicio del evento </label>
                          <label class="col s6 center" >Hora  final del evento</label>
                       
                         <!--contenedor horas eventos-->
                          <div class="row">
                           
                              <div class="input-field col s6" >
                                  <input type="time"  id="hora_ini" required name="hora_ini" value="{$datos_evento.hora_ini|default:""}">
                              </div>

                              <div class="input-field col s6">
                                  <input type="time" id="hora_fin"  required name="hora_fin" value="{$datos_evento.hora_fin|default:""}">
                              </div>
                          </div>
                         
                         
                               <div class="input-field">
                                    <i class="mdi-notification-phone-in-talk prefix"></i>
                                    <input id="tele_evento"  required type="text"  name="tel_evento" class="validate" pattern='[0-9]{'{7,10}'}' value="{$datos_evento.tel_evento|default:""}">
                                    <label for="tele_evento">¿Numero de telefono para contacto?</label>
                                </div>
                                    <div class="input-field ">                            
                                    <i class="mdi-social-public prefix"></i>
                                    <input type="text" name="web_evento"  value="{$datos_evento.web_evento|default:""}" placeholder="http://ejemplo.xxx">
                                    <label for="web_evento">¿Tu evento tiene un website?</label>
                                     </div>
                                <div class="input-field ">
                                    <i class="mdi-communication-email prefix"></i>
                                    <input id="mail_evento"  required type="email" class="validate" name="email_evento" value="{$datos_evento.email_evento|default:""}">
                                    <label for="mail_evento">Correo Electronico</label>
                                </div>
                        
                                <div class="input-field col s12">

                                      <i class="mdi-hardware-keyboard-alt prefix"></i>
                                     <textarea id="descripcion_evento" required class="materialize-textarea" name="descripcion_evento">{$datos_evento.descripcion_evento|default:""}</textarea>
                                     <label for="descripcion_evento">¡Cuentanos de que trata tu evento!</label>
                                    </div>
                                  <div class="input-field col s12">
                                      <i class="mdi-editor-attach-money prefix"></i>
                                      <input type="number"  required id="valor_evento"name="valor_evento" min="0"  value="{$datos_evento.valor_evento|default:""}" >
                                      <label for="valor_evento">Cover (En pesos $ colombianos)</label>
                                  </div>
                    <div class="col l12 right-align">
                        <a href="{$layoutParametros.root}public/terminos_condiciones.html" target="_blank">Ver Terminos Y Condiciones</a>
                    </div>

                    <input type="submit" value="Crear Evento" class="btn boton right"/>

              </form>
            </div>

        </div>
    </div>
    </div>
</div>