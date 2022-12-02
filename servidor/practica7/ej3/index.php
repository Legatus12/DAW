<?php 
require_once("Alumno.php");

$alumno1 = new Alumno("Victor", "Gil", "tonto", "1234a");
$alumno2 = new Alumno("Victor2", "Gil", "tonto", "1234a");

echo Alumno::$creados;
?>