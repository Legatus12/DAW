<!DOCTYPE html>

<html>

    <head>
        <title>ej22</title>
    </head>

    <body>
        <?php
            
            $years = rand(0,12);
            $raise;
            $salary = 40000;

            if($years < 3)
                $raise = 3;
            elseif($years < 5)
                $raise = 5;
            elseif($years < 10)
                $raise = 7;
            else
                $raise = 10;

            $salary *= 1 + $raise / 100;

            echo "años de antiguedad : " . $years . " / salario : " .$salary;
        ?>
    </body>

</html>