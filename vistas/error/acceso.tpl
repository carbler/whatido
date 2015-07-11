
        <a class="btn btn-success" href="{$layoutParametros.root}">Ir al Inicio</a>
        <a class="btn btn-success" href="javascript:history.back(1)">Volver a la p&aacute;gina anterior</a>

        {if (!Session::getClaveSession('autenticado'))}

            | <a class="btn btn-warning" href="{$layoutParametros.root}usuarios/login">Iniciar Sesi&oacute;n</a>

        {/if}

