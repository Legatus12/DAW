<!DOCTYPE html>

<html lang="en">

    <head>
        <title>arrays</title>
        <style>
            body{
                font-size: 20px;
            }
        </style>
    </head>

    <body>
    
        <?php

            $array = [];

            for ($i=0; $i < 1000; $i++) { 
                $array[$i] = rand(1, 10);
            }

            function countInArray($a, $n){
                $c = 0;
                for($i=0; $i < count($a); $i++){ 
                    if($a[$i] == $n)
                        $c++;
                }
                return $c;
            }

            $num = 6;
            echo $num . " => " . countInArray($array, $num) . " veces \n";
            print_r($array);

        ?>        

    </body>

</html>