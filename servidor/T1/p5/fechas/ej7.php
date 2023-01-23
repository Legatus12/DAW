<!DOCTYPE html>

<html>

    <head>
        <title>ej7</title>
    </head>

    <body>
        <?php

            $birthday = date("30/06/2002");
            $n = date_diff($birthday, date("d/m/Y"));
            echo $n;

        ?>
    </body>

</html>