<?php

require_once 'conexion.php';

//recuperar datos para su edición
if (isset($_GET['id']) && !empty(trim($_GET['id']))) {
    $query = "SELECT * FROM doctores WHERE id_doctor =?";
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

}else{
    header("location: index.php");
    exit();
}

//actualizar los datos
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //VERIFICAR QUE EXISTAN DATOS EN LAS VARIABLES ENVIADAS
    if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['cedula']) && isset($_POST['telefono']) && isset($_POST['direccion']) && isset($_POST['correo'])) {
        //construir la consulta
        $query = "UPDATE doctores SET cedula=?, nombre=?, apellido=?, TelefonoDoc=?, DireccionDoc=?, CorreoDoc=? WHERE id_doctor = ?";
        //preparar la consulta para ejecutarla
        if($stmt = $conn -> prepare($query)){
            $stmt -> bind_param('isssssi',$_POST['cedula'], $_POST['nombre'],$_POST['apellido'],$_POST['telefono'],$_POST['direccion'],$_POST['correo'], $_GET['id']);
            if($stmt -> execute()){
                header('location: index.php');
                exit();
            }else{
                echo "Error! el statement no se ejecuto";
            }
            $stmt -> close();
        }else{
            echo "Error en la preparación del statement";
        }
    }else{
        echo "No se han llenado los datos";
    }
    $conn -> close();
}
?>
