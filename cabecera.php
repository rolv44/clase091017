<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>091017</title>
    </head>
    <body>
    <?php
        function fechaActual(){
            $hoy=  getdate(time());
            $dia=$hoy['mday'];
            $mes=$hoy['month'];
            $anio=$hoy['year'];
            $fecha=$dia." de ".$mes." del ".$anio;
            return $fecha;
        }
        ?>
    <center>
        <h3>
            <?php echo $titu;?>
        </h3>
    </center>
    </body>
</html>
