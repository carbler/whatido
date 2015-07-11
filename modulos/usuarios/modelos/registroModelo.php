<?php

class registroModelo extends Modelo 
{
    public function __construct() {
        parent::__construct();
    }
    
    /**
     *  verifica la existencia del usuario en la Bd
     * @param type $usuario  identificador unico del usuario
     * @return type
     */
    public function verificarUsuario($usuario)
    {
        $id = $this->baseDatos->query("SELECT id,codigo,email FROM vista_usuarios WHERE usuario = '".$usuario."'");
        return $id->fetch();
    }
    
    /**
     *  Verifica si este email ya ha sido usado
     * @param type $email
     * @return boolean
     */
    public function verificarEmail($email)
    {
        $id = $this->baseDatos->query("SELECT id FROM vista_usuarios WHERE email = '".$email."'");
        
        if($id->fetch()){
            return true;
        }
        
        return false;
    }
    
    /**
     * Método para registrar usuarios
     * @param type $usuario
     * @param type $password
     * @param type $email
     */
    public function registrarUsuario($usuario, $password, $email)
    {   
        $random=  rand(17892334, 999999999);
        $this->baseDatos->prepare(
                "INSERT INTO usuarios "
                . "VALUES(null, :usuario, :password, :email, 1, :codigo, now(),now())"
                )
                ->execute(array(
                    ':usuario' => $usuario,
                    ':password' => Hash::getHash('sha1', $password, HASHKEY),
                    ':email' => $email,
                    ':codigo' => $random,
                ));
    }
    
    /**
     * 
     * @param type $id
     * @param type $codigo
     * @return type
     */
    public function getUsuario($id,$codigo) {
        $usuario=$this->baseDatos->query(
            "SELECT * FROM vista_usuarios WHERE id= '".$id."' AND codigo= '".$codigo."'"
        );
        return $usuario->fetch();
    }
  /**
   * Metodo para activar un usuario
   * @param type $id
   * @param type $codigo
   */
    public function activarUsuario($id,$codigo) {
        $usuario= $this->baseDatos->query(
            "UPDATE usuarios SET estado = 1 WHERE id= '".$id."' AND codigo= '".$codigo."'"
        );
    }

    
}


