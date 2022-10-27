<!DOCTYPE html>

<html>

    <head>
        <title>ej37_38_39</title>
    </head>

    <body>

    <form action="ej39.php" method="post">
        <input type="text" id="d" name="d" placeholders="dia"/>
        <input type="text" id="m" name="m" placeholders="mes"/>
        <input type="text" id="y" name="y" placeholders="año"/>
        <input type="submit" value="button"/>
    </form>

        <?php

            $d = $_POST['d'];
            $m = $_POST['m'];
            $y = $_POST['y'];
            
            function isLeap($y){
                if($y % 4 == 0 and ($y % 100 != 0 and $y % 400 ==0))
                    return true;
                else
                    return false;

            }
          
            function isvalid($d, $m, $y){
                if((($m==4 || $m==6 || $m==9 || $m==11)&& $d<=30)||($m==2 && $d<=28)||($d<=31)){
                    return true;
                }
                else{
                    return false;
                }
            }
            echo (isLeap($_POST['y']) ? "Es bisiesto" : "No es bisiesto")
                . "<br>" .
                (isvalid($_POST['d'],$_POST['m'],$_POST['y']) ? "Es valida" : "No es valida");
        ?>
    </body>

</html>