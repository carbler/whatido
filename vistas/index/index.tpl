<!--video Para vista Inicial-->
<!--alerta de mensajes-->

<div class="not-video" id="index">
    <div class="row apsolute-med-and-up" >
        {if isset($error)}
            <div id="error"><p>{$error}</p></div>
        {/if}
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
                                {foreach from=$departamentos item=departamento}
                                    <option value="{$departamento.id_departamento}">{$departamento.nombre}</option>
                                {/foreach}
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
                                {foreach from=$categorias item=cat}
                                    <option value="{$cat.id_categoria}">{$cat.nombre}</option>
                                {/foreach}
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
        <source src="{$video}" type="video/mp4">
    </video>
</div>

<section id="response-event" class="row ">



</section>


