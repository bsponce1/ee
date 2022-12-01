<?php
//fata colocar las restriciciones

require_once '../../../proyectoU1alquilerB/backend/conexion.php';

//recuperar datos para su edición
if(isset($_GET['id']) && !empty(trim($_GET['id']))){ 
    $query = 'SELECT * FROM productos WHERE id_producto=?';
    if($stmt = $conn -> prepare($query)){
       $stmt -> bind_param('i', $_GET['id']);
       if ($stmt -> execute()) {
           $result = $stmt -> get_result();
           if($result -> num_rows == 1){
               $row = $result -> fetch_array(MYSQLI_ASSOC);    
               $categoria = $row['categoria'];
               $marca = $row['marca'];
               $modelo = $row['modelo'];
               $cantidad = $row['cantidad'];
               $tarifa = $row['tarifa'];
               $descripcion = $row['descripcionProducto'];
               $imagen = $row['imagenpro'];

           }else{
               echo 'Error! No existen resultados para esta consulta';
               exit();
           }
       }else{
           echo 'No se ejecutó la consulta';
           exit();

       }
   }
   $stmt -> close();


}else{
   header("location: ../index.php");
   exit();
}

//Tomar los datos editados y actualizar en la base de datos.

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //verificar que existan datos en las variables globales
    $nombre_foto = $_FILES['imagen']['name'];
    $tipo_imagen = $_FILES['imagen']['tmp_name'];
    $ruta = '../../../proyectoU1alquilerB/img/' . $nombre_foto;
    $foto = 'img/' . $nombre_foto;
    move_uploaded_file($tipo_imagen, $ruta);

    if (
        isset($_POST['categoria']) && isset($_POST['marca']) &&
        isset($_POST['modelo']) && isset($_POST['cantidad']) &&
        isset($_POST['tarifa']) && isset($_POST['descripcion']) 
    ) {
        //construir la consulta
        $query = "UPDATE productos SET categoria=?, marca=?, modelo=?, cantidad=?, tarifa=?, descripcionProducto=?, imagenpro=? WHERE id_producto=?";
        //Preparar la consulta para ejecutarla
        if($stmt = $conn -> prepare($query)){
            $stmt -> bind_param('sssssssi',$_POST['categoria'],$_POST['marca'],$_POST['modelo'],$_POST['cantidad'],$_POST['tarifa'],$_POST['descripcion'],$foto, $_GET['id']);
            //Ejecutar statement
            if($stmt -> execute()){
                header("location:../../../proyectoU1alquilerB/backend/Admin/admin.php");
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
}

require_once '../../../ProyectoU1alquilerB/frontend/vistaModificar.php';
?>
