<!DOCTYPE html>

<html>

    <head>
        <title>ej9</title>
    </head>

    <body>
        <?php
            
            $originalDate = "2021-07-18";
            $newDate = date("d-m-Y", strtotime($originalDate));
            echo $originalDate . "<br>" . $newDate;

        ?>
    </body>

</html>