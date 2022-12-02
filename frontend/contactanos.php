<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="http://localhost/alquiler-de-bicicleta/proyectoU1alquilerB/frontend/styles/home.css">
<link rel="stylesheet" href="http://localhost/alquiler-de-bicicleta/proyectoU1alquilerB/frontend/styles/footer.css">

<script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
<head>
    <?php include 'vistasGenerales/cabecera.html';?>
</head>
<body>
    <?php 
    session_start();
    if (!$_SESSION) {
        include 'vistasGenerales/nav.php';
    }else {
        include 'vistasGenerales/navlogeo.php';
        
    }
    
    
    ?>
    <main > 
        <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127673.0550979306!2d-79.23443143303506!3d-0.24118321890950645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d546535730a17d%3A0xcef17541041b9f63!2sSanto%20Domingo!5e0!3m2!1ses-419!2sec!4v1669954178493!5m2!1ses-419!2sec" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="seccion3">
        <section class="about-services">
            <div class="margen">
                <h2 class="titulo">Nuestros servicios</h2>
                <div class="servicio-cont">
                    <div class="servicio-ind">
                        <img src="img/index/Entranamiento.svg" alt="">
                        <h3>Disfruta</h3>
                        <p>Desde un tour de medio día hasta unas vacaciones en bicicleta de 10 días completos, nuestro objetivo es ofrecer rutas en bicicleta en los mejores lugares. </p>
                    </div>
                    <div class="servicio-ind">
                        <img src="img/index/pet.svg" alt="">
                        <h3>Reservar ahora y pagar después</h3>
                        <p id="texto">Planes flexibles: reserva tu plaza de inmediato, sin que se te haga el cargo hoy.  </p>
                    </div>
                    <div class="servicio-ind">
                        <img src="img/index/veterinaria.svg" alt="">
                        <h3>Cancelación gratuita</h3> <br>
                        <p id="texto">Cancela con hasta 24 horas de antelación y recibe un reembolso completo</p>
                    </div>
                </div>
            </div>
        </section>
        <br><br><br><br><br><br><br>
        <div style="color:white">
                    <div class="cont" align="center">
                    <h3><b>LLÁMANOS</b></h3>
                    <p >TEL 0034 986 565 026  FAX 0034 986 508 114 <br>De Lunes a Viernes: 08:00 a 19:30 h <br>
                    Sábado y Domingo: 08:30 h a 18:30 h <br></p>
                </div>
        </div>

    </main>
    <footer>
        <div class="container__footer">
            <div class="box__footer">
                <div class="logo">
                    <img src="http://localhost/alquiler-de-bicicleta/proyectoU1alquilerB/frontend/img/logo-horizontal.png" alt="">
                </div>
                <div class="terms">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas impedit cum cumque velit libero officiis quam doloremque reprehenderit quae corporis! Delectus architecto officia praesentium atque laudantium, nam deleniti sapiente deserunt.</p>
                </div>
            </div>
            <div class="box__footer">
                <h2>Ofrece</h2>
                <a href="https://www.google.com">App Alquiler</a>
                <a href="#">Mantenimiento</a>
                <a href="#">Rutas seguras</a>
                <a href="#">Ventas</a>
            </div>

            <div class="box__footer">
                <h2>Ir támbien</h2>
                <a href="#">Acerca de</a>
                <a href="#">Trabajos</a>
                <a href="#">Procesos</a>
                <a href="#">Servicios</a>              
            </div>

            <div class="box__footer">
                <h2>Redes Sociales</h2>
                <a href="#"> <i class="fab fa-facebook-square"></i> Facebook</a>
                <a href="#"><i class="fab fa-twitter-square"></i> Twitter</a>
                <a href="#"><i class="fab fa-linkedin"></i> Linkedin</a>
                <a href="#"><i class="fab fa-instagram-square"></i> Instagram</a>
            </div>

        </div>

        <div class="box__copyright">
            <hr>
            <p>Todos los derechos reservados © 2022</p>
        </div>
    </footer>
</body>
</html>