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
        $this->creados++;
	}

    function __destruct(){
        $creados--;
    }

    function __get($atributo){
        if(property_exists(__CLASS__, $atributo)){
            return $this->atributo;
        }
        return NULL;
    }

    function __set($atributo, $valor){
        if(property_exists(__CLASS__, $atributo)){
            $this->$atributo = $valor;
        }
    }

	function pinta_datos(){
		echo $this->creados . " - " . $this->nombre;
	}
}
?>