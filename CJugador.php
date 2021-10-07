<?php

class CJugador{

    private $Dni;
    private $Nombre;
    private $Apellido;
    private $Edad;
    private $Peso;


    public function __construct($Dni,$Nombre,$Apellido,$Edad,$Peso)
    {
        $this->Dni=$Dni;
        $this->Nombre=$Nombre;
        $this->Apellido=$Apellido;
        $this->Edad=$Edad;
        $this->Peso=$Peso;
    
    }


    public function __set($name,$value)
    {
        $this->$name=$value;
    }

    public function __get($name)
    {
        return "El ".$name." es ".$this->$name."<br>";
    }

}

?>