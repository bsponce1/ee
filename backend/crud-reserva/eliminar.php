<?php
    if(isset($_GET['id']) && !empty(trim($_GET['id']))){
        require_once '../backend/conexion.php';
        //sentencia sql para eliminar
         $query = "DELETE FROM doctores WHERE id_doctor = ?";
         if($stmt = $conn -> prepare($query)){
            $stmt -> bind_param('i',$_GET['id']);
            if($stmt -> execute()){
                header("location: ../fronted/index.php");
                exit();
            }else{
                echo "Error! No se ejecuto la consulta a la base de datos";
                exit();
            }
         }else{
            $stmt -> close();
            $conn -> close();
         }
         
    }else{
        echo "Error por favor ntente mas tarde";
    }
