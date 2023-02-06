<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="crea_tabla.php">
            <input type="submit" value="CREATE usuarios">
        </form>
        <br><br>
        <p>CREAR NUEVO USUARIO</p>
        <form action="crea_usuario.php" method="post">
            <label for="nombre">nombre</label>
            <input type="text" name="nombre" id="nombre">
            <label for="mail">mail</label>
            <input type="mail" name="mail" id="mail">
            <input type="submit" value="INSERT">
        </form>
        <br><br>
        <p>FILTRAR USUARIOS</p>
        <form action="lista_usuario.php" method="post">
            <input type="text" name="filtroNombre" placeholder="filtrar por nombre">
            <input type="mail" name="filtroMail" placeholder="filtrar por mail">
            <input type="submit" value="LISTA">
        </form>
        <br><br>
        <p>EDITAR USUARIO</p>
        <form action="edita_usuario.php" method="post">
            <input type="text" name="editaNombre" placeholder="usuario a modificar">
            <input type="mail" name="editaMail" placeholder="nuevo mail">
            <input type="submit" value="EDITAR">
        </form>
    </body>
</html>