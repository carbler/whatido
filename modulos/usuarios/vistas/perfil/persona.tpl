  {foreach from=$persona item=person}  

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
             {if {$person.usuario} eq {$usuario}}
            <a href="{$layoutParametros.root}usuarios/editarPerfil/edit/{$usuario}" class="waves-effect waves-light btn" style =" background-color: rgb(236, 52, 52);min-width: 160px;"> Editar Perfil</a> 
             {/if}
            <p style="color: #ffffff;"><strong style="color: #5cbfff">Información Registrada: </strong>{$person.create_on}</p>
            <p style="color: #ffffff"><strong style="color: #5cbfff">Ultima Actualización:</strong> {$person.change_on}</p>

        </div>
        <div class= "col s12 l5 box-write">
            <h3 class="title"> <i class="big mdi-action-account-circle"></i>{$person.nombre1} {$person.nombre2} {$person.apellido1} {$person.apellido2}</h3>
            <p><strong>Nombre Usuario: </strong>{$person.nombre1} {$person.nombre2} {$person.apellido1} {$person.apellido2}</p>
            <p><strong>Fecha Nacimiento: </strong> {$person.fecha_nac}</p>
            <p><strong>Genero: </strong> {if $person.genero == 'M'}Masculino{else}Femenino{/if}</p>
            <p><strong>Ocupación: </strong> {$person.ocupacion}</p>
             <p><strong>Lugar de Residencia: </strong> {$person.ciudad}</p>
        </div>
        <div class="col s12 l6 offset-l1 box-write">
            <h3 class="title">Acerca De Mi</h3>
            <p>{$person.descripcion} </p>
        </div>
    </div>

    <div id="test2"  class="col l10 offset-l1" style="  padding: 20px; background-color: rgb(5, 91, 131); border-radius: 10px;" >
        <h3 class="title col s12 m12 l12">Listado Eventos </h3>
        <ul class="collapsible popout col l10 offset-l1" data-collapsible="accordion" id="eventobusqueda">
           {foreach from=$eventos item=evento}  
               
                   
                    {if $evento.usuario eq {$usuario}}
                           <li>
                   
                                <div class="collapsible-header row" style="color: rgb(47, 118, 124)">
                                    <h5 class="title">{$evento.nombre}</h5>
                                    <div class="col l9">
                                        <div>
                                            <strong style="color: #2C3E50">Fecha: </strong> {$evento.fecha_ini}
                                        </div>

                                        <div>
                                            <strong style="color: #2C3E50">Lugar: </strong> {$evento.lugar}
                                        </div>

                                        <div>
                                            <strong style="color: #2C3E50;">Categoria: </strong> {$evento.categoria}
                                        </div>
                                    </div>

                                    <div class="col l3">
                                        <a href="{$layoutParametros.root}eventos/editarEvento/editar/{$evento.id_evento}" class="waves-effect waves-light btn " style="background-color: #337ab7;min-width: 160px;"> Editar</a>
                                        <a href="{$layoutParametros.root}confirmar/delete/{$evento.id_evento}" class="waves-effect waves-light btn" style =" background-color: rgb(236, 52, 52);min-width: 160px;"> Eliminar</a> 
                                    </div>

                                </div>

                            <div class="collapsible-body white">
                                <p style="color: #2C3E50">{$evento.descripcion}</p>
                            </div>
                        </li>
                
                    {else}
                            <li>
                   
                                <div class="collapsible-header row" style="color: rgb(47, 118, 124)">
                                    <h5 class="title">{$evento.nombre}</h5>
                                    <div class="col l9">
                                        <div>
                                            <strong style="color: #2C3E50">Fecha: </strong> {$evento.fecha_ini}
                                        </div>

                                        <div>
                                            <strong style="color: #2C3E50">Lugar: </strong> {$evento.lugar}
                                        </div>

                                        <div>
                                            <strong style="color: #2C3E50;">Categoria: </strong> {$evento.categoria}
                                        </div>
                                    </div>

                                    <div class="col l3">
                                        <a href="#" class="secondary-content"><i class="mdi-action-assignment-ind"></i> Asistiré</a>
                                        <a href="/whatido/eventos/buscarEvento/info/{$evento.id_evento}" class="secondary-content"><i class="mdi-action-assignment"></i> Ver Mas</a> 
                                    </div>

                                </div>

                            <div class="collapsible-body white">
                                <p style="color: #2C3E50">{$evento.descripcion}</p>
                            </div>
                        </li>
                    {/if}
             
             {/foreach}
        </ul>
    </div>

    <div id="test3"  class="col l10 offset-l1" style="  padding: 20px; background-color: rgb(5, 91, 131); border-radius: 10px;" >

    </div>
</div>
      
      
 {/foreach}