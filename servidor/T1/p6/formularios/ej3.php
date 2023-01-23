<!DOCTYPE html>

<html lang="en">

    <head>
        <title>title</title>
    </head>

    <body>

        <?php

            $n = 4;
            $arr = [];

            for($i = 1; $i <= $n; $i++){
                for($j = 1; $j <= $i; $j++){
                    echo $j;
                }
                echo "\n";
            }

            for($i = $n; $i > 0; $i--){
                for($j = 1; $j < $i; $j++){
                    echo $j;
                }
                echo "\n";
            }

        ?>

    </body>

</html>