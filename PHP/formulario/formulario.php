<?php

    $name = $_POST["name"];
    $mail = $_POST["mail"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];

    if(empty($_POST["name"])||empty($_POST["mail"])||empty($_POST["age"])||empty($_POST["gender"])){
        echo "faltan datos";
    }
    elseif(!preg_match('/([a-zA-Z]+[a-zA-Z0-9_])*[@mail.]$/', $mail) ){
        echo "el correo no es válido";
    }
    else{
        echo "nombre" . $name . "<br>";
        echo "correo : " . $mail . "<br>";
        echo "edad : " . $age . "<br>";
        echo "sexo : " . $gender . "<br>";
    }

?>