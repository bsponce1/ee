<?php
       session_start();
       if (!$_SESSION) {
           header('location:login.php');
       }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <?php include 'vistasGenerales/cabecera.html';?>
</head>
<body>
    <h1>CRUD DE ADMINISTRADOR</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas assumenda perferendis id nemo voluptatem provident a deserunt consequuntur tempore suscipit eos voluptate harum commodi, eum cumque, eveniet aut porro in?</p>
    <a class="btn btn-primary boton " href="../../../../alquiler-de-bicicleta/proyectoU1alquilerB/backend/SESIONES/desconectarUsuario.php">Cerrar Sesión</a>
</body>
</html>