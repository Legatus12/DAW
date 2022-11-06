<!DOCTYPE html>

<html lang="en">

    <head>
        <title>Formulario</title>
        <style>
            body{
                font-size: 20px;
            }
        </style>
    </head>

    <body>
        <h1>formulario</h1>
        <form action="formulario.php" method="post">
            <label for="name"></label>
            <input type="string" name="name" id="name">
            <br><br>
            <input type="number" name="age" id="age">
            <br><br>
            <button type="submit">enviar</button>
        </form>
    </body>

</html>