<!DOCTYPE html>

<html lang="en">

    <head>
        <title>arrays</title>
        <style>
            body{
                font-size: 20px;
            }
        </style>
    </head>

    <body>
    
        <?php

            $grades = [7, 6, 4, 8, 9, 5, 6];
            $n = 0;
            
            for ($i=0; $i < count($grades); $i++) { 
                $n += $grades[$i];
            }

            echo "media : " . ($n / count($grades));

        ?>       

    </body>

</html>