<?php
session_start();

if (!$_SESSION) {
    header('location:../../../proyectoU1alquilerB/frontend/login.php');
}

if($_SESSION['id'] == 2){
    session_unset();
    session_destroy();
    header("location:../../../proyectoU1alquilerB/frontend/home.php");
}

if($_SESSION['id'] == 1){
    session_unset();
    session_destroy();
    header("location:../../../proyectoU1alquilerB/frontend/login.php");
}


?>