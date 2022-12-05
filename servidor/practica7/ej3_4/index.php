<?php 
require_once("Alumno.php");

$alumno1 = new Alumno("Alumno1", "ape1", "ape2", "1234a");
$alumno2 = new Alumno("Alumno2", "ape1", "ape2", "5678a");

echo Alumno::$creados;
?>