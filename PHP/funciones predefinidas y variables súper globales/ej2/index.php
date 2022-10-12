<!DOCTYPE html>

<html>

    <head>
        <title>ej2</title>
    </head>

    <body>
        <?php
            $ipClient = $_SERVER['REMOTE_ADDR'];
            $ipServer = $_SERVER['SERVER_ADDR'];
            $file = $_SERVER['PHP_SELF'];

            echo "IP del cliente : " . $ipClient . "<br>Ip del servidor : " . $ipServer . "<br>Fichero en ejecución : " . $file;
        ?>
    </body>

</html>