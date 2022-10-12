<!DOCTYPE html>

<html>

    <head>
        <title>ej2</title>
    </head>

    <body>
        <?php

            $temp = 1;
            echo $temp . " - " . gettype($temp) . "<br>";

            $temp = 1.0;
            echo $temp . " - " . gettype($temp) . "<br>";

            $temp = "uno";
            echo $temp . " - " . gettype($temp) . "<br>";

            $temp = true;
            echo $temp . " - " . gettype($temp) . "<br>";
        ?>
    </body>

</html>