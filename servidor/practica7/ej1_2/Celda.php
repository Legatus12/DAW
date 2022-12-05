<?php 
class Celda {
	public $alin_vertical;
	public $alin_horizontal;
	public $color_fondo;
	public $contenido;

	function __construct($alin_vertical,$alin_horizontal,$color_fondo,$contenido) {
		$this->alin_vertical = $alin_vertical;
		$this->alin_horizontal = $alin_horizontal;
		$this->color_fondo = $color_fondo;
		$this->contenido = $contenido;
	}

	function pinta_celda() {
		echo "<td align='$this->alin_horizontal'
		valign='$this->alin_vertical'
		bgcolor='$this->color_fondo'>	
		$this->contenido</td>";
	}
}
?>