<!DOCTYPE html>

<html>

    <head>
        <title>ej34</title>
    </head>

    <body>
        <?php
            
            $i = 0;

            do{
                $n = rand(1,6);
                $i++;
            } while($n!==6);
            echo "intentos hasta que ha salido 6: " . $i;
        ?>
    </body>

</html>