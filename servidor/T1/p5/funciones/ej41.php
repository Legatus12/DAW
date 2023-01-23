<!DOCTYPE html>

<html>

    <head>
        <title>ej37_38_39</title>
    </head>

    <body>

    <form action="ej39.php" method="post">
        <input type="text" id="n" name="n" placeholders="numero"/>
        <input type="submit" value="button"/>
    </form>

        <?php

            $n = $_POST['n'];

            function isArmstrong($n) {
                $m = 0;
                for($i = 0; $i < strlen($n); $i++){
                    $m += pow($n[$i], strlen($n));
                }
                if($m==$n){
                    return true;
                }
                else{
                    return false;
                }
            }
            
            echo (Armstrong($num) ? $n . " es Armstrong" : $n . " no es Armstrong");
        ?>
    </body>

</html>