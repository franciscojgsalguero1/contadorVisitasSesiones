<!DOCTYPE html>
<?php
?>
<html>
    <head>
        <title> Contador Visitas con Sesiones </title>
    </head>
    <body>

    <?php
        session_start();
        if ( isset( $_SESSION['visitas'] ) ) {
            $_SESSION['visitas']++;
            $mensaje = 'Numero de visitas: '.$_SESSION['visitas'];
        }
        else {
            $_SESSION['visitas'] = 1;
            $mensaje = 'Bienvenido por primera vez a nuesta web';
        }
        
        echo $mensaje;
    ?>

    </body>
</html>