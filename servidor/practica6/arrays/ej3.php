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

        $cities = [
            "Paris" => 2161000,
            "Madrid" => 3223000,
            "Roma" => 2873000
        ];

        function maxHabInCity($array){
            $city = "";
            $habs = 0;
            foreach ($array as $key => $el){
                if($el > $habs){
                    $city = $key;
                    $habs = $el;
                }
            }
            return $city;
        }

        echo "ciudad con más habitantes => " . maxHabInCity($cities) . "\n";
        print_r($cities);

        ?>        

    </body>

</html>