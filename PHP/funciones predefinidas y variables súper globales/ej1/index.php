<!DOCTYPE html>

<html>

    <head>
        <title>ej1</title>
    </head>

    <body>
        <?php
            
            $user_agent = $_SERVER['HTTP_USER_AGENT'];

            function getBrowser($user_agent){
                if(strpos($user_agent, 'MSIE') !== false)
                    return 'Internet explorer';
                elseif(strpos($user_agent, 'Edge') !== false) 
                    return 'Microsoft Edge';
                elseif(strpos($user_agent, 'Trident') !== false)
                    return 'Internet explorer';
                elseif(strpos($user_agent, 'Opera Mini') !== false)
                    return "Opera Mini";
                elseif(strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR') !== false)
                    return "Opera";
                elseif(strpos($user_agent, 'Firefox') !== false)
                    return 'Mozilla Firefox';
                elseif(strpos($user_agent, 'Chrome') !== false)
                    return 'Google Chrome';
                elseif(strpos($user_agent, 'Safari') !== false)
                    return "Safari";
                else
                    return 'Error al detectar su navegador';
            }

            $browser = getBrowser($user_agent);
 
            echo "El navegador con el que estás visitando esta web es: <b>" . $browser . "</b>";

        ?>
    </body>

</html>