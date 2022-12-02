<?php 
       session_start();
       if (!$_SESSION) {
           header('location:home.php');
       }
?>

<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/alquiler-de-bicicleta/proyectoU1alquilerB/frontend/styles/home.css">
    <link rel="stylesheet" href="http://localhost/alquiler-de-bicicleta/proyectoU1alquilerB/frontend/styles/footer.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <title>BiciBio</title>
    <?php include 'vistasGenerales/cabecera.html';?>
<body>
    <?php
        include 'vistasGenerales/navlogeo.php';
    ?>
<section class="seccion2">
        <div class="banner_img">
        <div class="slider">
            <ul>
                <li><img src="https://www.guiadeplaya.com.ar/uploads/1/1/2/8/112857895/alquiler-bicicletas-leo-pinamar-guia-de-playa-3.jpg"></li>
                <li><img src="https://static.apidae-tourisme.com/filestore/objets-touristiques/images/239/79/10309615.jpg"></li>
                <li><img src="http://www.markushof.it/images/slider/olang/sommer-pustertal/01-fahrrad-urlaub-pustertal.jpg"></li>
                <li><img src="https://www.tsv-kastl.de/application/files/6316/2447/2180/2017_05_MTB_Gruppe_4.jpg"></li>
            </ul>
    </section>
    <br><br><br>
    <section class="about-services">
            <div class="margen">
                <h2 class="titulo">Nuestros servicios</h2>
                <div class="servicio-cont">
                    <div class="servicio-ind">
                        <img src="img/index/Entranamiento.svg" alt="">
                        <p>Desde un tour de medio día hasta unas vacaciones en bicicleta de 10 días completos, nuestro objetivo es ofrecer rutas en bicicleta en los mejores lugares. Siguiendo nuestros consejos profesionales </p>
                    </div>
                    <div class="servicio-ind">
                        <img src="img/index/pet.svg" alt="">
                        <p>Reservar ahora y pagar después
    Planes flexibles: reserva tu plaza de inmediato, sin que se te haga el cargo hoy.  </p>
                    </div>
                    <div class="servicio-ind">
                        <img src="img/index/veterinaria.svg" alt="">
                        <p>Cancelación gratuita
    Cancela con hasta 24 horas de antelación y recibe un reembolso completo</p>
                    </div>
                </div>
            </div>
    </section>
    <section class="portafolio">
            <div class="">
                <h2 class="titulo">Disfruta del alquiler de bicicletas</h2>
                <div class="galeria-port">
                    <div class="imagen-port">
                        <img src="https://mejorconsalud.as.com/fitness/wp-content/uploads/2018/07/practicar-ciclismo-todos-los-dias.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/index/icono1.png" alt="">
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="https://www.4mejores.com/wp-content/uploads/2016/10/mejores-marcas-de-bicicletas-de-descenso.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/index/icono1.png" alt="">
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="https://st2.depositphotos.com/3886511/5843/i/950/depositphotos_58433891-stock-photo-childrens-ride-bikes-in-park.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/index/icono1.png" alt="">
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="https://cdn.getyourguide.com/img/tour/62e42e8a044e6.jpeg/146.jpg" alt="">
                        <div class="hover-galeria">
                            <div class="hover-galeria">
                        </div>
                    </div>
                </div>
            </div>
    </section>
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