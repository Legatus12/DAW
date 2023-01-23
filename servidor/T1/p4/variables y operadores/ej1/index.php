<!DOCTYPE html>

<html>

    <head>
        <title>ej1</title>
    </head>

    <body>
        <?php
            $var1 = "tanto";
            $var2 = "monta";
            $inter = "";

            echo $var1 . " " . $var2;

            echo "<br>";
            $inter = $var1;
            $var1 = $var2;
            $var2 = $inter;

            echo $var1 . " " . $var2;
        ?>
    </body>

</html>