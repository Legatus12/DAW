<!DOCTYPE html>

<html lang="en">

    <head>
        <title>title</title>
    </head>

    <body>

        <?php

        $s = "";
        $n = 4;
        $x = 1;

        for($i = 1; $i <= $n || $i == 0; $i + $x){
            $s .= $i;
            echo $s . "\n";
            if($i == $n)
                $x = -1;
        }

        ?>

    </body>

</html>