<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        session_start();
        if (!$_SESSION) {
            header('location:../../../proyectoU1alquilerB/frontend/home.php');
        }
        include 'vistasGenerales/cabecera.html';
    ?>
</head>
<body>
    <?php include 'vistasGenerales/navlogeo.php';?>
    <h1>Bienvedido a nuestros contactos</h1>
</body>
</html>