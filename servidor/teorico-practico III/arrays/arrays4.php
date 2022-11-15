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
        $arr1 = [2, 7];
        $arr2 = [3, 8];
        
        function arrays4_5($a1, $a2){
            $res = [];
            for ($i=0; $i <= count($a1); $i++) {
                $res[$i] = $a1[$i] + $a2[$i];
            }
            return $res;
        }

        print_r(arrays4_5($arr1, $arr2));

        ?>       

    </body>

</html>