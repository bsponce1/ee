<!DOCTYPE html>
<html lang="es">

<?php include 'vistasGenerales/cabecera.html'; ?>

<body>
    <div class="contenedor">

        <form class="form-control" action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="post" enctype="multipart/form-data">
            <h2 class="titulo">Actualizar Usuario</h2>
            <div class="form-group ">
                <div class="form-control">
                    <label for="">nombre</label>
                    <input class="form-control" value='<?php echo $nombre ?>' type="text" name="nombre" required>
                </div>
            </div>
            <div class="form-group ">
                <div class="form-control">
                    <label>Apellido</label>
                    <input class="form-control" value="<?php echo $apellido; ?>" type="text" name="apellido" required>
                </div>
            </div>
            <div class="form-group ">
                <div class="form-control">
                    <label for="">Telefono</label>
                    <input class="form-control" value="<?php echo $telefono; ?>" type="text" name="telefono" required>
                </div>
            </div>
            <div class="form-group ">
                <div class="form-control">
                    <label for="">Correo</label>
                    <input class="form-control" value="<?php echo $correo; ?>" type="text" name="correo" required>
                </div>
            </div>
            <div class="form-group ">
                <div class="form-control">
                    <label for="">Usuario</label>
                    <input class="form-control" value="<?php echo $usuario; ?>" type="text" name="usuario" required>
                </div>
            </div>
            <div class="form-group ">
                <div class="form-control">
                    <label for="">Contraseña</label>
                    <input class="form-control" value="<?php echo $contrasena; ?>" type="text" name="contrasena"
                        required>
                </div>
            </div>
            <br>
            <select name="cargo" class="form-select" id="estado">
                <option>
                    <?php echo $descripcion ?>
                </option>
                <option value="1">administrador</option>
                <option value="2">cliente</option>
            </select>

            <div class="justify-content-center align-content-center text-center mb-5 mt-2">
            <input class="btn btn-success acciones" type="submit" value="Actualizar">
                <a class="btn btn-success acciones" href="dashboard.php">Cancelar</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>