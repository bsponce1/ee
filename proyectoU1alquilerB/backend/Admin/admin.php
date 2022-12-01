<?php
 session_start();
 if (!$_SESSION) {
     header('location:login.php');
 }
require_once '../../../proyectoU1alquilerB/backend/conexion.php';
//construyo la consulta
$query = "SELECT  id_producto,categoria, marca, modelo, cantidad, tarifa, descripcionProducto, imagenpro 
          FROM productos";
$result = $conn -> query($query);
require_once '../../../proyectoU1alquilerB/frontend/adminCrud.php';

?>