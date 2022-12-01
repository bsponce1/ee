<?php
    if(isset($_GET['id']) && !empty(trim($_GET['id']))){
        require_once '../../../proyectoU1alquilerB/backend/conexion.php';
        //sentencia sql para eliminar
         $query = "DELETE FROM productos WHERE id_producto = ?";
         if($stmt = $conn -> prepare($query)){
            $stmt -> bind_param('i',$_GET['id']);
            if($stmt -> execute()){
                header("location: admin.php");
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
