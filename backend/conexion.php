<?php 
//Datos para la conexion de la base de datos 
define('SERVENAME','localhost');
define('USERNAME','root');
define('PASSWORD','');
define('DBNAME','alquilerdebicicleta');


//Creacion de la conexion usando mysqli
$conn = new mysqli(SERVENAME, USERNAME, PASSWORD, DBNAME);

//Controlar la conexion 
if($conn -> connect_error){
    die('Conexion fallida: ' . $conn -> connect_error);
}else{
  die('Conexión exitosa');

}

?>