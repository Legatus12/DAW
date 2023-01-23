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

            $length = $_POST['length'];
            $res = [];
                
            for($i=0; $i < $length; $i++){
                array_push($res, $i);
            }

            print_r($res);

        ?>        

    </body>

</html>