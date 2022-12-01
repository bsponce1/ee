<?php
require_once '../../../proyectoU1alquilerB/backend/conexion.php';
#Verificar si lo datos fueron enviados por el método post
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre_foto = $_FILES['imagen']['name'];
    $tipo_imagen = $_FILES['imagen']['tmp_name'];
    $ruta = '../../../proyectoU1alquilerB/img/' . $nombre_foto;
    $foto = 'img/' . $nombre_foto;
    move_uploaded_file($tipo_imagen, $ruta);
    # Verificar que existan datos en la varible verificada
    if (
        isset($_POST['categoria']) && isset($_POST['marca']) &&
        isset($_POST['modelo']) && isset($_POST['cantidad']) &&
        isset($_POST['tarifa']) && isset($_POST['descripcion']) 
    ) {
        # Construir la consulta
        $query = "INSERT INTO productos(categoria, marca, modelo, cantidad, tarifa, descripcionProducto, imagenpro)
                        VALUES (?, ?, ?, ?, ?, ?, ?)";
        #Preparar la consulta
        if ($stmt = $conn->prepare($query)) {
            $stmt->bind_param(
                'sssssss', $_POST['categoria'], $_POST['marca'],
                $_POST['modelo'], $_POST['cantidad'],
                $_POST['tarifa'], $_POST['descripcion'], $foto
            );
            //Ejecutar el statement
            if ($stmt->execute()) {
                header('location:../../../proyectoU1alquilerB/backend/Admin/admin.php');
                exit();
            } else {
                echo 'El error statement no se ejecutó!';
            }
            $stmt->close();
        } else {
            echo 'Error en la preparación del statement!';
        }
    } else {
        echo 'No se estan llenando todos los datos!';
    }
    $conn->close();
} else {
    #echo 'No llegaron los datos por el método POST!';
}

require_once '../../../ProyectoU1alquilerB/frontend/vistaAgregar.php';
?>