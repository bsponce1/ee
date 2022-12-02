<!DOCTYPE html>
<html lang="es">

<head>
   <?php include 'vistasGenerales/cabecera.html';?>
    <title>Usuarios </title>
</head>

<body>
    <div class="">
        <h2 class="text-center mt-3">Usuarios Registrados</h2>
        <h4><a class="btn btn-primary acciones" href="../../../../alquiler-de-bicicleta/proyectoU1alquilerB/backend/Admin/agregarU.php">Agregar Usuario</a></h4>
        <table class="table table-info">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre y apellido</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //control sobre la conexion
                if($result -> num_rows > 0){
                    //recorre la matriz asociativa
                    $i=0;
                    while($row = $result ->fetch_assoc ()){
                        $i=$i+1;
                        echo '<tr>';
                        echo '<td>'.$i. '</td>';
                        echo '<td>'. $row['nombreusuario']." ".$row['apellidousuario'].'</td>';
                        echo '<td>'. $row['correousuario']. '</td>';
                        echo '<td>'. $row['telefonousuario'].'</td>';
                        echo '<td>'. $row['descripcioncargo'].'</td>';
                        echo '<td class = "p-2">';
                        echo '<a class="btn btn-success acciones m-2" href="../../../proyectoU1alquilerB/backend/Admin/modificarU.php?id='.$row['id_usuario'].'">Editar </a>';
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

    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>

