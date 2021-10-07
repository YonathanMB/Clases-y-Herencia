<?php

require_once("CJugador.php");

class CJugadorVoley extends CJugador
{

    private $Velocidad;
    private $Resistencia;
    Private $PotenciaRemate;

    public function __construct($Dni,$Nombre,$Apellido,$Edad,$Peso,$Velocidad,$Resistencia,$PotenciaRemate)
    {
        parent::__construct($Dni,$Nombre,$Apellido,$Edad,$Peso);
        $this->Velocidad=$Velocidad;
        $this->Resistencia=$Resistencia;
        $this->PotenciaRemate=$PotenciaRemate;
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


?>