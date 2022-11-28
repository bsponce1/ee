<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'vistasGenerales/cabecera.html';?>
</head>
<body>
    <?php 
    session_start();
    if (!$_SESSION) {
        include 'vistasGenerales/nav.php';
    }else {
        include 'vistasGenerales/navlogeo.php';
        
    }
    
    
    ?>
    <h1>Bienvedido a nuestros contactos</h1>
</body>
</html>