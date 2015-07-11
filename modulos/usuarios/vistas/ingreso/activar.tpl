<h2>Activaci&oacute;n de Cuenta</h2>

<p> </p>

<a href="{$layoutParametros.root}">Ir al Inicio</a>

<?php if(!Session::getClaveSession('autenticado')): ?>
	| <a href="{$layoutParametros.root}login">Iniciar Sesi&oacute;n</a>
<?php endif; ?>