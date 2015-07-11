<link rel="stylesheet" type="text/css" href="{$layoutParametros.root}/public/css/estilos.css">

<div class="fondo">
    <div class="row">
        <div class="cajon col s12 m10 l10 offset-m1 offset-l1">

            <div class="col s12 m12 l12">
                <a href="javascript:history.back(1)" class="btn-cerrar"><i class="mdi-action-highlight-remove""></i> </a>
            </div>

            <p class="text">
                <i class="mdi-alert-error  icon" style="color: #D40000"></i>
                {$text|default:"Se Ha Presentado Un Error En La Operacion"}
            </p>

            <div class="right">
                <a class="btn boton  waves-light #00bcd4 cyan" href='{$layoutParametros.root}'>
                    <i class="mdi-action-home left"></i>Ir Al Inicio</a>

                <a class=" btn boton waves-light #ff9800 orange"   href="javascript:history.back(1)">
                    <i class="mdi-action-history left" ></i>Volver Atras</a>
                  
                {if (!Session::getClaveSession('autenticado'))}
                    <a class="btn btn-warning" href="{$layoutParametros.root}usuarios/login">Iniciar Sesi&oacute;n</a>
                {/if}
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

