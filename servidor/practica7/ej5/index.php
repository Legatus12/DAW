<?php 
require_once("Articulo.php");

$a1 = new Articulo(1, "linterna");
$a2 = clone($a1);

echo $a2->id;
?>