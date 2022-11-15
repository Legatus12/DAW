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

            $dni = "12451815Y";
            echo $dni."<br>";
            function letraDni($dni){
                echo substr($dni,strlen($dni)-1,1);
            }
            echo letraDni($dni);
            
        ?>       

    </body>

</html>