<!DOCTYPE html>
<html lang="es">

<?php include 'vistasGenerales/cabecera.html';?>

<body>
    <div class="container">
        <div class="contenedor">
            
            <form class="" action="<?php echo $_SERVER['REQUEST_URI']?>" method="post" enctype="multipart/form-data">
            <h2 class="titulo">Actualizar producto</h2>
            <p>Llene el formulario para agregar un producto a la base de datos</p>
                <div class="form-group">
                    <label for="">Categoria</label>
                    <input class="form-control" value='<?php echo $categoria?>' type="text" name="categoria" required>
                </div>
                <div class="form-group">
                    <label>Marca</label>
                    <input class="form-control" value="<?php echo $marca; ?>" type="text" name="marca" required>
                </div>
                <div class="form-group">
                    <label for="">Modelo</label>
                    <input class="form-control" value="<?php echo $modelo; ?>" type="text" name="modelo" required>
                </div>
                <div class="form-group">
                    <label for="">Cantidad</label>
                    <input class="form-control" value="<?php echo $cantidad; ?>" type="text" name="cantidad" required>
                </div>
                <div class="form-group">
                    <label for="">Tarifa</label>
                    <input class="form-control" value="<?php echo $tarifa; ?>" type="text" name="tarifa" required>
                </div>
                <div class="form-group">
                    <label for="">Descripción</label>
                    <input class="form-control" value="<?php echo $descripcion; ?>" type="text" name="descripcion" required>
                </div>
                <div class="form-group">
                    <label for="imagen">Foto</label>
                    <input class="form-control" value="<?php echo $ruta;?>" id="imagen" type="file" name="imagen" >
                    
                </div>

                <img class="m-2 " src="../../../proyectoU1alquilerB/<?php echo $imagen;?>" width="120px" height="120px"> <br>

                <input class="btn btn-success acciones" type="submit" value="Actualizar">
                <a class="btn btn-success acciones" href="admin.php">Cancelar</a>
            </form>
        </div>
    </div>
       
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>