<?php 
       session_start();
       if (!$_SESSION) {
           header('location:home.php');
       }
?>

<!DOCTYPE html>
<html lang="en">
    <?php include 'vistasGenerales/cabecera.html';?>
<body>
    <?php
        include 'vistasGenerales/navlogeo.php';
    ?>
    <section class="seccion1">
        <h1> Bienvenido al Home </h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae quidem fugit illo possimus eligendi facilis placeat hic doloremque rem. Ex repudiandae ratione distinctio inventore voluptatem iusto laudantium ipsam officiis. Repellendus.</p>
    </section>

</body>
</html>