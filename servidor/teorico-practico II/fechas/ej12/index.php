<!DOCTYPE html>

<html>

    <head>
        <title>ej12</title>
    </head>

    <body>
        <?php
            
            echo date("F - Y") . " / ";
            echo date("F - Y", strtotime('-1 month')). " / ";
            echo date("F - Y", strtotime('-2 month')). " / ";
            echo date("F - Y", strtotime('-3 month')). " / ";

        ?>
    </body>

</html>