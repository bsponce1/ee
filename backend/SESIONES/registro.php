<?php

require_once '../conexion.php';

//verificar si los datos fueron enviados por el metodo post
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //verificar que existan datos en las variables globales

    if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['cedula']) && isset($_POST['telefono']) && isset($_POST['direccion']) && isset($_POST['correo'])) {
        //construir la consulta
        $query = "INSERT INTO usuario(nombreusuario, apellidousuario, cedulausuario, telefonousuario, direccionusuario, correousuario, fotousuario) VALUE (?,?,?,?,?,?,?)";
        //Preparar la consulta para ejecutarla
        if($stmt = $conn -> prepare($query)){
            $stmt -> bind_param('sssssss',$_POST['nombre'],$_POST['apellido'],$_POST['cedula'],$_POST['telefono'],$_POST['direccion'],$_POST['correo'],$base_datos);
            //Ejecutar statement
            if($stmt -> execute()){
                header("location: ../index.php");
                exit();
            }else{
                echo 'Error! El statemet no se ejecutó';
            }
        }else{
            echo 'Error en la preparación del statement';
        }

        $stmt -> close();
    }else{
        echo 'no se están llenando todos los datos';
    }

    $conn -> close();
}else{
    // echo 'no llegaron los datos por el post';

}

require_once '../../frontend/registro.html';


?> 
