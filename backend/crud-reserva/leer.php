<?php
require_once "../conexion.php";

if (isset($_GET['id']) && !empty(trim($_GET['id']))) {
    $query = "SELECT (usuario.nombreusuario, usuario.apellidousuario) as Nombres,
                     usuario.telefono, reserva.fecha_reserva, reserva.fecha_entrega, reserva.totalreserva  FROM reserva
                INNER JOIN productos on reservas.id_producto = productos.id_producto
                INNER JOIN estado on reservas.id_estado = estado.id_estado
                INNER JOIN usuario on reservas.id_usuario = usuario.id_usuario
                WHERE id_reserva =?";
    if ($stmt = $conn->prepare($query)) {
        $stmt->bind_param('i', $_GET['id']);
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            if ($result->num_rows == 1) {
                $row = $result->fetch_array(MYSQLI_ASSOC);
                $nombre = $row['nombre'];
                $apellido = $row['apellido'];
                $cedula = $row['cedula'];
                $telefono = $row['TelefonoDoc'];
                $direccion = $row['DireccionDoc'];
                $correo = $row['CorreoDoc'];
                $foto = $row['foto'];
            } else {
                echo 'Error no se ha encontrado el usuario';
                exit();
            }
        } else {
            echo 'no se ejecuto el stmt o consulta';
            exit();
        }
    }
    $stmt->close();
    $conn->close();
} else {
    echo ' No se ha recibido el identificador intente mas tarde';
}

?>