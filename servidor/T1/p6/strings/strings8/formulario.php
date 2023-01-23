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

            echo str_replace($_POST['old'],$_POST['new'],$_POST['s']);

        ?>        

    </body>

</html>