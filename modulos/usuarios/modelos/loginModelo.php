<?php

class loginModelo extends Modelo
{
    public function __construct() {
        parent::__construct();
    }
    
    public function loginUsuario($usuario, $password)
    {
        $datos = $this->baseDatos->query(
                "select * from vista_usuarios " .
                "where usuario = '$usuario' " .
                "and pass = '" . Hash::getHash('sha1', $password, HASHKEY) ."'" 
                );
        return $datos->fetch();
    }
}

?>
