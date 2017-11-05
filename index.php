<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>091017</title>
    </head>
    <?php
    error_reporting(0);
    $titu="IDENTIFICADOR DE USUARIO";
    include_once './cabecera.php';
    ?>
    <body>
        <br>
    <center>
        <form method="POST" action="metodos.php">
            USUARIO: <input type="text" name="txtUser" id="user" value="" /><br>
            PASSWORD: <input type="password" name="txtPass" id="pass" value="" /><br>
            <input type="submit" value="VALIDAR" />
        </form>
        <?php include_once './pie.php';?>
    </center>
    </body>
</html>
