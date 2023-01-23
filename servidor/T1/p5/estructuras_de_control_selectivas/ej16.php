<!DOCTYPE html>

<html>

    <head>
        <title>ej16</title>
    </head>

    <body>
        <?php
            
            $n1 = rand();
            $n2 = rand();
            $n3 = rand();
            $n4 = rand();

            $max = max($n1, $n2, $n3, $n4);
            $min = min($n1, $n2, $n3, $n4);

            echo $max; 
            if (($max % 2) == 0) {
                echo '(par)';
            } else {
                echo '(impar)';
            }

            echo " / " . $min; 
            if (($min % 2) == 0) {
                echo '(par)';
            } else {
                echo '(impar)';
            }

        ?>
    </body>

</html>