<!DOCTYPE html>

<html>

    <head>
        <title>ej3</title>
    </head>

    <body>
        <?php
            $s = "variables locales";
            function ej3(){
                global $s;
                echo "El mensaje hace uso de <i><b>" . $s . "</b></i><br>" .
                "Mostramos datos con variables" . "<br>" .
                "Este es un comando incorrecto: del c:\*.* ";
            }
            echo ej3();
        ?>
    </body>

</html>