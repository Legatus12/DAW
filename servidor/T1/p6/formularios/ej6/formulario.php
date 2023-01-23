<!DOCTYPE html>

<html lang="en">

    <head>
        <title>formularios</title>
        <style>
            body{
                font-size: 20px;
            }
        </style>
    </head>

    <body>
    
        <?php

            if(checkdate(int $month, int $day, int $year)){
                $date = new DateTime($_POST['d']."-".$_POST['m']."-".$_POST['y']);
                echo strftime('%A %e de %B de %Y', $date->getTimestamp());
            }  
            else
                echo "la fecha no es valida";

        ?>        

    </body>

</html>