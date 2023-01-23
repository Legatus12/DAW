<!DOCTYPE html>

<html>

    <head>
        <title>ej10</title>
    </head>

    <body>
        <?php
            
            $first = date('d/m/Y',strtotime('first day of this month', time()));
            $last = date('d/m/Y',strtotime('last day of this month', time()));
            echo $first . " " . $last;

        ?>
    </body>

</html>