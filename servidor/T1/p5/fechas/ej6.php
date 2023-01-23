<!DOCTYPE html>

<html>

    <head>
        <title>ej6</title>
    </head>

    <body>
        <?php
            
            echo "Última modificación: " . date("l, j\t\h F, Y, h:ma", filemtime('index.php'));

        ?>
    </body>

</html>