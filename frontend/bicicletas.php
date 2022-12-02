<?php

//require_once '../backend/conexionP.php';
require_once '../backend/conexion.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    session_start();
    if (!$_SESSION) {
        header('location:../../../proyectoU1alquilerB/frontend/home.php');
    }
    include 'vistasGenerales/cabecera.html';
    ?>
</head>

<body>
    <?php include 'vistasGenerales/navlogeo.php'; ?>
    <section class="">
        <div class="container">
            <br>
            <div class="alert alert-success" role="alert">
                <span>Observa nuestros Productos y Reserva</span></br>
                <h5><a href="" data-bs-toggle="modal" data-bs-target="#nuevoModal" class="badge bg-success">Reservar</a></h5>
            </div>
            <div class="row">
                <?php
                //$sentencia = $pdo->prepare("SELECT * FROM `productos`");
                //$sentencia->execute();
                //$listaProductos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
                $sentencia = "SELECT * FROM productos";
                $listaProductos = $conn->query($sentencia);
                ?>
                <?php
                foreach ($listaProductos as $producto) { ?>
                    <div class="col-3">
                        <div class="card">
                        <img class="card-img-top" src="../<?php echo $producto['imagenpro'] ?>" style="width:auto;height: auto;" alt="Bicicletas">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $producto['marca'] ?></h5>
                                <h5 class="card-title"><?php echo $producto['modelo'] ?></h5>
                                <h5 class="card-title">Categoria: <?php echo $producto['categoria'] ?></h5>
                                <span>$<?php echo $producto['tarifa'] ?></span></br>
                                
                            </div>
                        </div>
                    </div>
                <?php   } ?>


            </div>
        </div>
    </section>


    </div>
    <?php
    $sentencia = "SELECT * FROM productos";
    $listaProductos = $conn->query($sentencia);
    ?>
    <?php
    $sentenciaEstado = 'SELECT * FROM estado WHERE id_estado="2"';
    $estado = $conn->query($sentenciaEstado);
    ?>
    <?php
        include 'reserva.php'
    ?>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>