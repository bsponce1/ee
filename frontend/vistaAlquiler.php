
<!DOCTYPE html>
<html lang="es">

<head>
   <?php include 'vistasGenerales/cabecera.html';?>
    <title>Alquiler </title>
</head>

<body>
    <div class="" >
        <h2 class="text-center mt-3">Registros de alquiler</h2>
        <table class="table table-info">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Télefono</th>
                    <th scope="col">Fecha Reserva</th>
                    <th scope="col">Feha Entrega</th>
                    <th scope="col">Días</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Tarifa</th>
                    <th scope="col">Total</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Cambiar estado</th>
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
                        echo '<td>'. $row['nombreusuario'].'</td>';
                        echo '<td>'. $row['apellidousuario']. '</td>';
                        echo '<td>'. $row['correousuario'].'</td>';
                        echo '<td>'. $row['telefonousuario'].'</td>';
                        echo '<td>'. $row['fechaReserva'].'</td>';
                        echo '<td>'. $row['fechaEntrega'].'</td>';
                        echo '<td>'. $row['dias'].'</td>';
                        echo '<td>'. $row['modelo'].'</td>';
                        echo '<td>'. $row['tarifa'].'</td>';
                        echo '<td>'. $row['totalreserva'].'</td>';
                        echo '<td>'. $row['descripcionestado'].'</td>';
                        echo '<td class = "p-2">';
                     
                        echo '<a type="submit" class="btn btn-success acciones m-2" href="../../../proyectoU1alquilerB/backend/Admin/modificarAlquiler.php?id='.$row['id_reserva'].'" value="">Cambiar</a>';

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
    <script type="text/javascript">
        function preguntar(idusuario) {
            let mensaje = confirm("¿Estás seguro que desea eliminar este usuario?");
            if (mensaje) {
                window.location.href = "eliminar.php?id="+idusuario;
            } else {
                return false;
                header("location: admin.php");
            }
        }
    </script>
</body>

</html>

