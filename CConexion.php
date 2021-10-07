<?php

class CConexion{
    private $servidor="localhost";
    private $usuario="root";
    private $contraseña="";
    private $bd="BASETAREA";
   

    public function obtenerConexionDirecta()
    {
            return new mysqli($this->servidor,
            $this->usuario,$this->contraseña,
            $this->bd);
    }

}
?>