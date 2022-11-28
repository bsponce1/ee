<?php
 session_start();
 if ($_SESSION) {
    header('location:../../../proyectoU1alquilerB/frontend/homelogeo.php');
}

  
require_once '../../../proyectoU1alquilerB/backend/conexion.php';

//verificar si los datos fueron enviados por el metodo post
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //verificar que existan datos en las variables globales

    if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['correo']) && isset($_POST['telefono']) && isset($_POST['usuario']) && isset($_POST['contrasenia'])) {
        //construir la consulta
        $query = "INSERT INTO usuario(nombreusuario, apellidousuario, correousuario, telefonousuario, usuario, contrasena, id_cargo) VALUE (?,?,?,?,?,?,?)";
        //Preparar la consulta para ejecutarla
        if($stmt = $conn -> prepare($query)){
            $id_cliente = '2';
            $stmt -> bind_param('ssssssi',$_POST['nombre'],$_POST['apellido'],$_POST['correo'],$_POST['telefono'],$_POST['usuario'],$_POST['contrasenia'],$id_cliente);
            //Ejecutar statement
            if($stmt -> execute()){
                header("location:../../../proyectoU1alquilerB/frontend/login.php");
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
     echo 'no llegaron los datos por el post';

}

require_once '../../frontend/registro.html';




?> 
