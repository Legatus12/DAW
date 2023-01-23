<?php

class Articulo {

	private $id;
	private $nombre;

	function __construct($id, $nombre){
	    $this->id = $id;
		$this->nombre = $nombre;
	}

    function __clone(){
        $this->id++;
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

	function mostrarArticulo(){
		echo $this->id . " - " . $this->nombre;
	}
	
	function borrarNombre(){
	    unset($this->nombre);
	}
}

?>