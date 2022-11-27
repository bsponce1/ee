<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="shortcut icon" href="img/logo-cuadrado.png">
    <title>BiciBio</title>
</head>
<body >
   
    <section  >
        <div class="container px-xl-5 py-xxl-5 px-md-5 text-center text-lg-start my-5">
          <div class="row gx-lg-5 align-items-center ">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <img src="img/logo-horizontal.png" alt="" width="60%">
              <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                 Alquiler de bicicletas <br />
                <span style="color: hsl(218, 81%, 75%)">La forma de ayudar al medio ambiente</span>
              </h1>
              <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
                Es ahora de aportar al medio ambiente con el uso de las bicicletas y aportar tambien a tú salud, para ver cambios hay que comenzar por uno mismo. 
              </p>
            </div>
      
            <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
              <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
              <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
              <div id="radius-shape-3" class="position-absolute rounded-circle shadow-5-strong"></div>
      
              <div class="card bg-glass colors">
                <div class="card-body px-4 py-5 px-md-5 colors">
                    <!--Formulario de login-->
                  <form class="colors" action="accesoUsuario.php" method="post">
                    <!-- titulo de inicio -->
           
                    <div class="row titulo">
                        <h1>Inicio de sesión</h1>
                    </div>
      
                    <!-- imput de usuario -->
                    <div class="form-outline mb-4">
                      <input type="text" id="form3Example3" class="form-control" name="usuario" />
                      <label class="form-label" for="form3Example3">Usuario</label>
                    </div>
      
                    <!-- Password input -->
                    <div class="form-outline mb-4">
                      <input type="password" id="form3Example4" class="form-control" name="contrasenia"/>
                      <label class="form-label" for="form3Example4">Contraseña</label>
                    </div>
      
                 
                    <!-- Submit button -->
                    <button type="submit" value="submit" class="btn btn-primary btn-block mb-4">
                      Iniciar
                    </button>
      
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      
      </section>

</body>
</html>