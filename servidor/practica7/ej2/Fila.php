<?php 
class Fila {
	public $celdas;

	function __construct($celdas) {
		$this->celdas = $celdas;
	}

	function pinta_fila() {
		echo "<tr>";
        foreach ($this->celdas as $celda) {
            $celda->pinta_celda();
        }
        echo "</tr>";
	}
}
?>