<!DOCTYPE html>

<html>

    <head>
        <title>ej3</title>
    </head>

    <body>
        <?php
            $protocol = $_SERVER['SERVER_PROTOCOL'];
            $serverName = $_SERVER['SERVER_NAME'];
            $path = $_SERVER['SCRIPT_FILENAME'];

            echo "Protocolo : " . $protocol . "<br>Nombre del servidor : " . $serverName . "<br>Ruta de la página en el servidor : " . $path;
        ?>
    </body>

</html>