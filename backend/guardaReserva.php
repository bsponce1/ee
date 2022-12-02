<?php
    require '../backend/conexion.php';

    $fechaR = $conn->real_escape_string($_POST['rese']);
    $fechaI = $conn->real_escape_string($_POST['entre']);
    $diasT = $conn->real_escape_string($_POST['dias']);
    $totalR = $conn->real_escape_string($_POST['total']);
    $id_est = $conn->real_escape_string($_POST['estado']);
    $id_produ = $conn->real_escape_string($_POST['bicis']);
    $id_usu = $conn -> real_escape_string($_POST['usuario']);

    $sql = "INSERT INTO reserva (fechaReserva,fechaEntrega,dias,totalreserva,id_estado,id_producto,id_usuario) VALUES ('$fechaR','$fechaI',$diasT,$totalR,$id_est,$id_produ,$id_usu)";

    if($conn -> query($sql)){
        $id = $conn->insert_id;
    }

    header('location:../frontend/bicicletas.php');
?>