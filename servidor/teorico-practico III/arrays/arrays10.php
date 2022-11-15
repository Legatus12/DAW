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

        function arrays10a($a){
            $res = [];
            for($i=0; $i < $count($a); $i++){
                array_push($res, array_pop($a));
            }
            return $res;
        }
        
        function arrays10b($a){
            $res = [];
            for($i=0; $i < $count($a); $i++){
                array_unshift($res, array_shift($a));
            }
            return $res;
        }

        
        $arr = [1, 2, 3];

        echo arrays10a($arr);
        echo "<br>";
        echo arrays10b($arr);
        ?>     

    </body>

</html>