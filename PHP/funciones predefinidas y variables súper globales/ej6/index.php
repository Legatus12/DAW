<!DOCTYPE html>

<html>

    <head>
        <title>ej6</title>
    </head>

    <body>
        <?php
            
            $file = $_SERVER['PHP_SELF'];
            $n = count(file($filePath));
            echo $n;

        ?>
    </body>

</html>