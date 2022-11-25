<?php
require_once 'conexion.php';

//verificar si los datos fueron eviados por el metodo post

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //VERIFICAR QUE EXISTAN DATOS EN LAS VARIABLES ENVIADAS
    if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['cedula']) && isset($_POST['telefono']) && isset($_POST['direccion']) && isset($_POST['correo'])) {
        //construir la consulta
        $query = "INSERT INTO doctores(cedula,nombre,apellido,TelefonoDoc,DireccionDoc,CorreoDoc) VALUES (?,?,?,?,?,?)";
        //preparar la consulta para ejecutarla
        if($stmt = $conn -> prepare($query)){
            $stmt -> bind_param('ssssss',$_POST['cedula'], $_POST['nombre'],$_POST['apellido'],$_POST['telefono'],$_POST['direccion'],$_POST['correo']);
            if($stmt -> execute()){
                header('location: ../frontend/index.php');
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
}else{
    echo "No se han llenado los datos por el metodo POST";
}
?>

