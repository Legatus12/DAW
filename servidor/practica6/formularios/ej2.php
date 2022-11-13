<!DOCTYPE html>

<html lang="en">

    <head>
        <title>title</title>
    </head>

    <body>
    <h1>Triangulo</h1>
        <form action="formulario.php" method="post">
            <label for="base">base</label>
            <input type="number" name="base" id="base">
            <br><br>
            <label for="altura">altura</label>
            <input type="number" name="altura" id="altura">
            <br><br>
            <button type="submit">calcular</button>
        </form>

        <?php

        $base = $_POST["base"];
        $altura = $_POST["altura"];

        echo "el area del triángulo es : " . ($base*$altura); 

        ?>

    </body>

</html>