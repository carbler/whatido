<?php
class Modelo {
    protected $baseDatos;
    private $registro;
    
    public function __construct() {
        $this->registro = Registro::getInstancia();
        $this->baseDatos= $this->registro->baseDatos;
    }
}
