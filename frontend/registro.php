<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/crud/styles/styles.css">
    <title>Nuevo Usuario</title>
</head>
<body class="container">
    
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