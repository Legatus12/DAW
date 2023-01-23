<!DOCTYPE html>

<html>

    <head>
        <title>ej26</title>
    </head>

    <body>
        <?php
            
            $n = 0;
            for($i = 0; $i < 10; $i++){
                $n += rand(1, 100);
            }
            $n /= 10;
            echo number_format($n, 2);

        ?>
    </body>

</html>