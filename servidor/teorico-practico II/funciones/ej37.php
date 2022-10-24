<!DOCTYPE html>

<html>

    <head>
        <title>ej37</title>
    </head>

    <body>
        <?php
            
            function esBisiesto($y){
                if($y % 4 == 0 and ($y % 100 != 0 and $y % 400 ==0))
                    return true;
                else
                    return false;

            }
            
        ?>
    </body>

</html>