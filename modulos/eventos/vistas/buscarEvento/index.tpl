  {foreach from=$eventos item=evento}                          

<section class="row" style="color: #004E91">
    <div>
        <img id="img-back" src="{$layoutParametros.root}modulos/eventos/vistas/buscarEvento/img/portada.jpg">
    </div>

    <div class="col s12 m12 l10 offset-l1 box-write" style="margin-top: 20px; margin-bottom: 30px;">
        <p><strong style="color: #892C14">Fecha De Creación: </strong>{$evento.create_on}</p>
        <p><strong style="color: #892C14">Ultima Actualización:</strong> {$evento.change_on}</p>
        <h4 class="title" ">{$evento.nombre}</h4>
    </div>
    <div class="col l12">
 
        <div class="col s12 m5 l5 offset-l1  box-write">
            <h5 class="title">Información General</h5>
            <p><strong>Nombre: </strong> {$evento.nombre}</p>
            <p><strong>Lugar: </strong>{$evento.lugar}</p>
            <p><strong>Dirección: </strong>{$evento.direccion}</p>
            <p><strong>Ciudad: </strong>{$evento.ciudad}</p>
            <p><strong>Categoria: </strong>{$evento.categoria}</p>
        </div>


        <div class="col s12 m6 l4 offset-l1 offset-m1 box-write">
            <div>
                <h5 class="title">Información Adicional</h5>
                <p><strong>Fecha Realización: </strong> De <strong>{$evento.fecha_ini}</strong> Hasta <strong>{$evento.fecha_fin}</strong></p>
                <p><strong>Duración: </strong> De <strong>{$evento.hora_ini}</strong> Hasta <strong>{$evento.hora_fin}</strong></p>
                <p><strong>Cover: $</strong>{$evento.valor}</p>

            </div>

            <div>
                <h5 class="title">Información Contacto</h5>
                <p><strong>Email:</strong> {$evento.email}</p>
                <p><strong>Telefono: </strong>{$evento.telefono}</p>
                <p><strong>Website : <a href="{$evento.web_site}">{$evento.web_site}</a></p>
                <a href="/whatido/usuarios/perfil/info/{$evento.usuario}">Ver Perfil De Usuario</a>
            </div>
        </div>
    </div>

    <div class="col s12 m12 l10 offset-l1 box-write" style="margin-top: 50px">
        <h5 class="title">Descripción:</h5>
        <p>{$evento.descripcion}</p>
    </div>
</section>
        
         {/foreach}