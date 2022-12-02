<!DOCTYPE html>
<html lang="es">
<head>
    <?php include 'vistasGenerales/cabecera.html';?>
</head>
<body >
   
    <section class="" >
        <div class="container px-xl-5 py-xxl-5 px-md-5 text-center text-lg-start" id="box-title">
          <div class="row gx-lg-5 align-items-center ">
            <div class="col-lg-6 mb-5 mb-lg-0" id="box-title2">
                <img src="img/logo-horizontal.png" alt="" width="60%">
              <h1 class=" display-5 fw-bold ls-tight" id="titulologin" style="color: hsl(218, 81%, 95%)">
                 Alquiler de Bicicletas <br />
                <span style="color: hsl(218, 81%, 75%)">La forma de ayudar al medio ambiente</span>
              </h1>
              <p class="mb-4 opacity-70" id="parrafologin" style="color: hsl(218, 81%, 85%)">
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
                  <form class="colors" action="../../../../alquiler-de-bicicleta/proyectoU1alquilerB/backend/SESIONES/accesoUsuario.php" method="post">
                    <!-- titulo de inicio -->
           
                    <div class="row titulo">
                        <h1>Inicio de sesión</h1>
                    </div>
      
                    <!-- imput de usuario -->
                    <div class="form-outline mb-4">
                      <input type="text" id="form3Example3" class="form-control" name="usuario" required >
                      <label class="form-label" for="form3Example3" >Usuario</label>
                    </div>
      
                    <!-- Password input -->
                    <div class="form-outline mb-4">
                      <input type="password" id="form3Example4" class="form-control" name="contrasenia" required>
                      <label class="form-label" for="form3Example4">Contraseña</label>
                    </div>
      
                 
                    <!-- Submit button -->
                    <button type="submit" value="submit" class="btn btn-primary btn-block mb-4">
                      Iniciar
                    </button>
                    <a href="../../../../alquiler-de-bicicleta/proyectoU1alquilerB/frontend/home.php" class="btn btn-dark btn-block mb-4">Regresar</a>
                    <br>
                    <span>Aún no tienes cuenta</span> <a href="../../../../alquiler-de-bicicleta/proyectoU1alquilerB/backend/SESIONES/registroUsuario.php">Registrate</a>
      
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      
      </section>

</body>
</html>