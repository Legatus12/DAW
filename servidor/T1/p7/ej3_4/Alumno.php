<?php 
class Alumno {

    public static $creados = 0;
	private $nombre;
	private $apellido1;
	private $apellido2;
	private $dni;

	function __construct($nombre, $apellido1, $apellido2, $dni){
		$this->nombre = $nombre;
		$this->apellido1 = $apellido1;
		$this->apellido2 = $apellido2;
		$this->dni = $dni;
        Alumno::$creados++;
	}

    function __destruct(){
        Alumno::$creados--;
    }

    public function __get($atributo){
        if(property_exists(__CLASS__, $atributo)){
            return $this->$atributo;
        }
        return NULL;
    }

    public function __set($atributo, $valor){
        if(property_exists(__CLASS__, $atributo)){
            $this->$atributo = $valor;
        }
    }
    
    function setDni($dni){
        $letter = substr($dni, -1);
        $numbers = substr($dni, 0, -1);
    
        if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $numbers%23, 1) == $letter && strlen($letter) == 1 && strlen ($numbers) == 8 ){
        $this->dni = $dni;
        }
    }
}
?>