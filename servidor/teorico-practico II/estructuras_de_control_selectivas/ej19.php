<!DOCTYPE html>

<html>

    <head>
        <title>ej19</title>
    </head>

    <body>
        <?php
            
            $protocol = stripos($_SERVER['SERVER_PROTOCOL'],'https') === 0 ? 'https://' : 'http://';
            echo "protocolo : " . $protocol;

        ?>
    </body>

</html>