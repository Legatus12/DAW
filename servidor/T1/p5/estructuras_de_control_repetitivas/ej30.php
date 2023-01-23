<!DOCTYPE html>

<html>

    <head>
        <title>ej30</title>
    </head>

    <body>
        <?php
            
            $n = rand(1,10);
            echo $n;

            if($n % 2 === 0)
                $n -= 2;
            else
                $n--;

            while($n > 0){
                echo ", " . $n;
                $n -= 2;
            }

        ?>
    </body>

</html>