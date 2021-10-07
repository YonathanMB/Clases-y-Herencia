<?php

require_once("CJugador.php");

class CJugadorFutbol extends CJugador
{

    private $TipoJuego;
    private $TiempoJuego;
    Private $Posicion;

    public function __construct($Dni,$Nombre,$Apellido,$Edad,$Peso,$TipoJuego,$TiempoJuego,$Posicion)
    {
        parent::__construct($Dni,$Nombre,$Apellido,$Edad,$Peso);
        $this->TipoJuego=$TipoJuego;
        $this->TiempoJuego=$TiempoJuego;
        $this->Posicion=$Posicion;
    }

    public function __set($name,$value)
    {
        return $this->$name=$value;
    }

    public function __get($name)
    {
        return $this->name;
    }



}