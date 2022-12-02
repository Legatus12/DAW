<?php 
require_once("Fila.php");

class Tabla {
	public $filas;

	function __construct($filas) {
		$this->filas = $filas;
	}

	function pinta_tabla() {
		echo "<table>";
        foreach ($this->filas as $fila) {
            $fila->pinta_fila();
        }
        echo "</table>";
	}
}
?>