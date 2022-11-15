<!DOCTYPE html>

<html lang="en">

    <head>
        <title>strings</title>
        <style>
            body{
                font-size: 20px;
            }
        </style>
    </head>

    <body>
    
        <?php

            $word = $_POST['word'];

            function ej1_2_3($s){
                return strtoupper($s) == strtoupper(strrev($s))
                ? $s . " es un palindromo / capicua"
                : $s . " no es un palindromo / capicua";
            }

            echo function ej1_2_3($word);

        ?>        

    </body>

</html>