<?php
class menuModeloWidget extends  Modelo
{
    public  function __construct(){
        parent::__construct();
    }

    public  function getMenu(){
        return array(
            array(
                'id'=>'buscarEvento',
                'class'=>'hide-on-small-only',
                'icon'=>'mdi-action-search',
                'titulo' => 'Buscar Evento',
                'tooltip'=> 'Buscar Eventos',
                'enlace' => BASE_URL . 'usuarios/registro'
            ),
            array(
                'id'=>'buscarEvento',
                'class'=>'hide-on-small-only',
                'icon'=>'mdi-action-search',
                'titulo' => 'Buscar Evento',
                'tooltip'=> 'Buscar Eventos',
                'enlace' => BASE_URL . 'usuarios/registro'
            )
        );
    }
}