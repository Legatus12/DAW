<!DOCTYPE html>

<html>

    <head>
        <title>ej33</title>
    </head>

    <body>
        <?php
            
            $n = rand(1, 20);
            echo $n . "\n";
            $r = 0;
            for($n; $n > 0; $n--){
                $r += $n;
            }
            echo $r;
        ?>
    </body>

</html>