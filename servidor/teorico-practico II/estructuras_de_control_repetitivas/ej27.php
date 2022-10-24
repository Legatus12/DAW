<!DOCTYPE html>

<html>

    <head>
        <title>ej27</title>
    </head>

    <body>
        <?php
            
            $p = 0;
            $i = 1;
            for($i = 0; $i < 20; $i++){
                $n = rand(1, 100);
                $n % 2 === 0 ? $p += $n : $i *= $n;
            }
            echo "suma de pares = " . $p . "\nproducto de impares = " . $i;
        ?>
    </body>

</html>