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
            <input type="string" name="name" id="name">
            <br><br>
            <input type="string" name="mail" id="mail">
            <br><br>
            <input type="integer" name="age" id="age">
            <br><br>
            <input type="radio" name="gender" id="gender" value="hombre">Hombre
            <input type="radio" name="gender" id="gender" value="mujer">Mujer
            <input type="radio" name="gender" id="gender" value="otro">Otro
            <br><br>
            <button type="submit">enviar</button>
        </form>
    </body>

</html>