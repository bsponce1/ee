<!DOCTYPE html>
<html lang="en">
<head>
   <?php include 'vistasGenerales/cabecera.html';?>
</head>
<body>
    
    <div class="contenedor">
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method = "post" enctype="multipart/form-data" class="form-control">
            <h2 class="text-center">Agregar un Nuevo Usuario</h2>
             <p class="text-center">Llene este formulario para agregar un usuario a la base de datos</p>
            <div class="form-group ">
                <div class="form-control">
                    <label class="form-text" for="">Nombre</label>
                    <input type="text" name="nombre" class="form-control" required>
                </div>
            </div>
            
    
            <div class="form-group ">
                <div class="form-control">
                        <label class="form-text" for="">Apellido</label>
                        <input type="text" name="apellido" class="form-control" required>
                </div>

            </div>

            <div class="form-group">
                <div class="form-control">
                    <label class="form-text" for="">Cedula</label>
                    <input type="text" name="cedula" class="form-control" required>
                </div>
            </div>

            <div class="form-group ">
                <div class="form-control">
                    <label class="form-text" for="">Telefono</label>
                    <input type="text" name="telefono"  class="form-control" required>
                </div>
            </div>

            <div class="form-group ">
                <div  class="form-control">
                    <label class="form-text" for="">Dirección</label>
                    <input type="text" name="direccion" class="form-control" required>
                </div>
            </div>

            <div class="form-group ">
                <div  class="form-control">
                    <label class="form-text" for="">Correo</label>
                    <input type="text" name="correo" class="form-control" required>
                </div>
        
            </div>

            <div class="form-group ">
                <div class="form-control">
                    <label class="form-text" for="fotousuario">Foto</label> <br>
                    <input type="file" class="custom-file-input" id="image" name="fotousuario" lang="es" required>
                </div>
            </div>
            <div class="justify-content-center align-content-center text-center mb-5 mt-2">
                <input class="btn bg-info" type="submit" value="agregar">
              <a class="btn bg-danger" href="../index.php">Cancelar</a>
            </div>
            
    
        </form>
    </div>
    
</body>
</html>