<!DOCTYPE html>

<html>

    <head>
        <title>ej8</title>
    </head>

    <body>
        <?php
        
            trigger_error("Ha ocurrido un error inesperado", E_USER_ERROR);
            $error = error_get_last();
            echo $error;
            //print_r(error_get_last());

        ?>
    </body>

</html>