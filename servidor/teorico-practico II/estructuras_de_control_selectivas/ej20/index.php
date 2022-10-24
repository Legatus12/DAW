<!DOCTYPE html>

<html>

    <head>
        <title>ej20</title>
    </head>

    <body>
        <?php
            
            $n = rand(1,10);
            $s = $n . "es un numero primo";
            for($i = 2; $i < $n; $n++){
                if($n % $i === 0){
                    $s = $n . " no es un numero primo";
                    break;
                }
            }
            echo $s;

        ?>
    </body>

</html>