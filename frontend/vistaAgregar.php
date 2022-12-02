<!DOCTYPE html>
<html lang="en">

<?php include 'vistasGenerales/cabecera.html'; ?>

<body>
    <<div class="contenedor">

        <form class="form-control" action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="post"
            enctype="multipart/form-data">
            <p class="text-center">Llene el formulario para agregar un producto a la base de datos</p>
            <div class="form-group ">
                <div class="form-control">
                    <label for="">Categoria</label>
                    <input class="form-control" type="text" name="categoria" required>
                </div>
            </div>
            <div class="form-group ">
                <div class="form-control">
                    <label>Marca</label>
                    <input class="form-control" type="text" name="marca" required>
                </div>
            </div>
            <div class="form-group ">
                <div class="form-control">
                    <label for="">Modelo</label>
                    <input class="form-control" type="text" name="modelo" required>
                </div>
            </div>
            <div class="form-group ">
                <div class="form-control">
                    <label for="">Cantidad</label>
                    <input class="form-control" type="text" name="cantidad" required>
                </div>
            </div>
            <div class="form-group ">
                <div class="form-control">
                    <label for="">Tarifa</label>
                    <input class="form-control"  type="text" name="tarifa" required>
                </div>
            </div>
            <div class="form-group ">
                <div class="form-control">
                    <label for="">Descripción</label>
                    <input class="form-control" type="text" name="descripcion"
                        required>
                </div>
            </div>
            <div class="form-group ">
                <div class="form-control">
                    <label for="imagen">Foto</label>
                    <input class="form-control" id="imagen" type="file" name="imagen">

                </div>
            </div>

            <div class="justify-content-center align-content-center text-center mb-5 mt-2">
            <input class="btn btn-success acciones" type="submit" value="Agregar">
            <a class="btn btn-success acciones" href="dashboard.php">Cancelar</a>
            </div>
        </form>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
                crossorigin="anonymous"></script>
</body>

</html>