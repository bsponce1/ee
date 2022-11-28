<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <title>Usuarios </title>
</head>

<body>
    <h2 class="titulo0">Usuarios Registrados</h2>
    <h4><a class="btn btn-primary acciones" href="#">Agregar Usuario</a></h4>
    <a class="btn btn-primary boton " href="../../../../alquiler-de-bicicleta/proyectoU1alquilerB/backend/SESIONES/desconectarUsuario.php">Cerrar Sesión</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col"></th>
                <th scope="col">Categoria</th>
                <th scope="col">Marca</th>
                <th scope="col">Modelo</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Tarifa</th>
                <th scope="col">Descripcion</th>
            </tr>
        </thead>
        <tbody>
            <?php
            //control sobre la conexion
            if($result->num_rows > 0){
                //recorre la matriz asociativa
                $i=0;
                while($row = $result ->fetch_assoc ()){
                    $i=$i+1;
                    echo '<tr>';
                    echo '<td>'.$i. '</td>';
                    echo '<td class="text-center"><img src=' . $row['imagenpro'] . ' width="120px" height="120px"></td>';
                    echo '<td>'. $row['categoria'].'</td>';
                    echo '<td>'. $row['marca']. '</td>';
                    echo '<td>'. $row['modelo'].'</td>';
                    echo '<td>'. $row['cantidad'].'</td>';
                    echo '<td>'. $row['tarifa'].'</td>';
                    echo '<td>'. $row['descripcionProducto'].'</td>';
                    echo '<td>';
                    echo '<a class="btn btn-success acciones" href="leer.php?id='.$row['id_producto'].'">Leer </a>';
                    echo '<a class="btn btn-success acciones" href="actualizar.php?id='.$row['id_producto'].'">Actualizar </a>';
                    echo '<a href="#" class="btn btn-success acciones" onclick="preguntar(' . $row['id_producto'] .')">Eliminar </a>';
                    echo '</td>';
                    echo '</tr>';
                }
                $result -> free();
            }else{
                echo '<p><em>No existe datos registrados </em></p>';
            }
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script type="text/javascript">
        function preguntar(idusuario) {
            let mensaje = confirm("¿Estás seguro que desea eliminar este usuario?");
            if (mensaje) {
                window.location.href = "eliminar.php?id="+idusuario;
            } else {
                return false;
                header("location: index.php");
            }
        }
    </script>
</body>

</html>

