<?php
require_once '../../../proyectoU1alquilerB/backend/conexion.php';

//Recibir los datos del formulario 
$user = $_POST['usuario'];
$pass = $_POST['contrasenia'];


/*Saber si estan pasando valores en las variables de sesión*/

if(isset($user)){
    $admin = 1;
    $client = 2;
    //consultar si los dato son los que estan en la base
    $consulta = "SELECT * FROM usuario AS us WHERE us.usuario = '$user' AND us.contrasena =  '$pass' AND us.id_cargo='$admin' OR us.id_cargo ='$client'";
 
    //ejecutar la consulta
    $resultados = mysqli_query($conn,$consulta) or die(mysqli_connect_errno());
    
    //almacenar los datos en un arreglo
    $fila = mysqli_fetch_array($resultados);
    
    $conn -> close();
    //controlar si llegan datos desde la consulta 
    if($fila['id_cargo']==null){
        //redirigir al Login
        header("location:../../../proyectoU1alquilerB/frontend/login.php");
    }
    
    if($fila['id_cargo'] == 1){
        //crear la sesión 
        session_start();
        //definir las variables de sision y redirigimos a un apagina de usuario
        $_SESSION['id'] = $fila['id_cargo'];
        $_SESSION['nombre']=$fila['nombreusuario'];
            //ingreso del usuario
            header("location:../../../proyectoU1alquilerB/frontend/adminCrud.php");
    }
    
    if($fila['id_cargo'] == 2){
        //Ingreso de cliente
        session_start();
        $_SESSION['id'] = $fila['id_cargo'];
        $_SESSION['nombre']=$fila['nombreusuario'];
        header("location:../../../proyectoU1alquilerB/frontend/homelogeo.php");
    }
        
}else{
    header("location:../../../proyectoU1alquilerB/frontend/login.php");
}

?>