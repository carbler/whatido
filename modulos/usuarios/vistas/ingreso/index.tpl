<section class="ventana_emergente">
<!--Fondo Oscuro Vista-->
<div class="fondo">

    <!--Contenedor De Formularios-->
    <div class="row">
    <div class=" cajon col  m10 l10 offset-m1 offset-l1">
        <!--Boton Para Regresar-->
        <div class="col s12 m12 l12">
           <a href="javascript:history.back(1)" class="btn-cerrar"><i class="mdi-action-highlight-remove""></i> </a>
        </div>

        <div class="col l12">
            <!--alerta de mensajes-->
            {if isset($mensaje)}
                <div id="mensaje"><p>{$mensaje}</p></div>
            {/if}
        </div>

        <!--contenedor formulario ingreso-->
        <div class="col l12">

            <!--alerta de errores -->
            {if isset($error)}
                <div id="error"><p>{$error}</p></div>
            {/if}

            <div class="col s12 m6 l6">
                <!--titulo formulario-->
                <h4 class="encabezado" ">Ingresar</h4>

                <!--formulario ingreso-->
                <form  method="post" class="formulario">
                    <input type="hidden" value="1" name="login" />

                    <div class="input-field">
                        <i class="mdi-action-account-circle prefix"></i>
                        <input id="usuario" type="text" name="usuario" class="validate" value="{$datos_login.usuario|default:""}">
                        <label for="usuario">Nombre Usuario</label>
                    </div>

                    <div class="input-field ">
                        <i class="mdi-action-lock prefix"></i>
                        <input id="pass" type="password" class="validate" name="pass">
                        <label for="pass">Contraseña</label>
                    </div>

                    <div class="col l12 right-align">
                        <a href="#">¿Recuperar Mi Contraseña?</a>
                    </div>

                    <input type="submit" value="Listo" class="btn boton right" />

                </form>

            </div>

            <!--contenedor formulario registro-->
            <div class="col s12 m6 l6 divisordiv">

                <!--titulo formulario-->
                <h4 class="encabezado">Bienvenido</h4>

                <!--formulario ingreso-->
                <form  method="post" class="formulario">
                    <input type="hidden" value="1" name="registro" />

                    <div class="input-field">
                        <i class="mdi-action-account-circle prefix"></i>
                        <input id="usuario_registro" type="text" name="usuario_registro" class="validate" value="{$datos_registro.usuario_registro|default:""}">
                        <label for="usuario_registro">Nombre Usuario</label>
                    </div>
                    <div class="input-field ">
                        <i class="mdi-communication-email prefix"></i>
                        <input id="mail" type="email" class="validate" name="email" value="{$datos_registro.email|default:""}">
                        <label for="mail">Correo Electronico</label>
                    </div>

                    <div class="input-field ">
                        <i class="mdi-action-lock prefix"></i>
                        <input id="pass_registro" type="password" class="validate" name="pass_registro">
                        <label for="pass_registro">Contraseña</label>
                    </div>

                    <div class="input-field ">
                        <i class="mdi-action-lock-outline prefix"></i>
                        <input id="confirm" type="password" class="validate" name="confirmar">
                        <label for="confirm">Confirmar Contraseña</label>
                    </div>

                    <div class="col l12 right-align">
                        <a href="{$layoutParametros.root}public/terminos_condiciones.html" target="_blank">Ver Terminos Y Condiciones</a>
                    </div>

                    <input type="submit" value="Registrarme" class="btn boton right"/>

              </form>
            </div>

        </div>
    </div>
    </div>
</div>
</section>



