<!DOCTYPE html>
<html lang="en">

<?php include 'vistasGenerales/cabecera.html';?>

<body>
    <div class="container">
        <div class="contenedor">
            
            <form class="" action="<?php echo $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
            <h2 class="titulo">Agregar un nuevo usuario</h2>
            <p>Llene el formulario para agregar un usuario a la base de datos</p>
                <div class="form-group">
                    <label for="">Categoria</label>
                    <input class="form-control" type="text" name="categoria" required>
                </div>
                <div class="form-group">
                    <label>Marca</label>
                    <input class="form-control" type="text" name="marca" required>
                </div>
                <div class="form-group">
                    <label for="">Modelo</label>
                    <input class="form-control" type="text" name="modelo" required>
                </div>
                <div class="form-group">
                    <label for="">Cantidad</label>
                    <input class="form-control" type="text" name="cantidad" required>
                </div>
                <div class="form-group">
                    <label for="">Tarifa</label>
                    <input class="form-control" type="text" name="tarifa" required>
                </div>
                <div class="form-group">
                    <label for="">Descripción</label>
                    <input class="form-control" type="text" name="descripcion" required>
                </div>
                <div class="form-group">
                    <label for="">Foto</label>
                    <input class="form-control" type="file" name="imagen">
                </div>
                <input class="btn btn-success acciones" type="submit" value="Agregar">
                <a class="btn btn-success acciones" href="admin.php">Cancelar</a>
            </form>
        </div>
    </div>
       
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>