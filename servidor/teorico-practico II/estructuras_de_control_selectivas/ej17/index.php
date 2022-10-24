<!DOCTYPE html>

<html>

    <head>
        <title>ej17</title>
    </head>

    <body>
        <?php
            
            if(date("N") > 5)
                echo "es fin de semana";
            else{
                $n = 6 - intval(date("N"));
                echo date("l") . " no es fin de semana. Faltan " . $n . " días!";
            }

        ?>
    </body>

</html>