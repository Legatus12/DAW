<!DOCTYPE html>

<html>

    <head>
        <title>ej21</title>
    </head>

    <body>
        <?php
            
            $h = date("h");
            $m = date("i");
            $s = date("s");

            $s += 10;
            if($s >= 60){
                $s -= 60;
                $m += 1;
            }

            echo $h . ":" . $m . ":" . str_pad($s, 2, '0', STR_PAD_LEFT). " ";
            
        ?>
    </body>

</html>