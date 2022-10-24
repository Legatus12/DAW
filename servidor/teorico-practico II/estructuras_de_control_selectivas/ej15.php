<!DOCTYPE html>

<html>

    <head>
        <title>ej15</title>
    </head>

    <body>
        <?php
            
            $word = "aba"
            if(strrev($word)==$word)
                echo $word . " es un palindromo";
            else
                echo $word . " no es un palindromo";

        ?>
    </body>

</html>