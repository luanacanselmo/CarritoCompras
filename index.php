<?php
include("cabeceraemeyce.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda NANI</title>
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
</head>

<body>
    <!-- Header -->
    <!-- <header>
        <nav>
            <div class="logo " style="display:flex">EMEYCE
                <div>
                    <img src="imagenes/WhatsApp Image 2024-10-11 at 20.08.00.jpeg" style="height: 50px; margin-top: -7px" alt="">
                </div>
            </div>
            <ul class="nav-links">
                <li><a class="active" href="#">Inicio</a></li>
                <li><a href="productos.php">Productos</a></li>
                <li><a href="#">Contacto</a></li>
                <li><a href="login.php">iniciarsesion</a></li>

            </ul>

        </nav>
    </header> -->

    <!-- Banner -->
    <section class="banner">

        <h1>Bienvenido a EMEYCE</h1>
        <p>Encuentra los mejores productos al mejor precio.</p>
    </section>

    <!-- Categorías -->

    <section class="categories">
        <h2>Nuestros Productos</h2>
        <div class="category-grid">
            <a href="productos.php" class="boton">
                <div class="category-card">Pulseras</div>
            </a>

            <a href="productos.php" class="boton">
                <div class="category-card">Aros</div>
            </a>

            <a href="productos.php" class="boton">
                <div class="category-card">Collares</div>
            </a>

            <a href="productos.php" class="boton">
                <div class="category-card">Tobilleras</div>
            </a>

            <a href="productos.php" class="boton">
                <div class="category-card">Más</div>
            </a>
        </div>
    </section>


    <!-- Productos Destacados -->
    <section class="game-section">
        <h2>Productos Destacados</h2>
        <div class="owl-carousel custom-carousel owl-theme">
            <div class="item">
                <div class="item-image" style="background-image: url('imagenes/aros1.jpeg');"></div>
                <div class="item-desc">
                    <h3>Aros plateados</h3>
                    <p>Excelete calidad</p>
                    <a class="buy-now" href="https://wa.me/2613334940?text=Holaaa! Estuve mirando tu web y me interesa consultarte sobre unos productos." target="_blank">Consultar</a>
                </div>
            </div>
       
            <div class="item">
                <div class="item-image" style="background-image: url('imagenes/choquers.jpeg');"></div>
                <div class="item-desc">
                    <h3>Chokers</h3>
                    <p>Comodidad y estilo</p>
                    <a class="buy-now" href="https://wa.me/2613334940?text=Holaaa! Estuve mirando tu web y me interesa consultarte sobre unos productos." target="_blank">Consultar</a>
                </div>
            </div>
            <div class="item">
                <div class="item-image" style="background-image: url('imagenes/aros2.jpeg');"></div>
                <div class="item-desc">
                    <h3>Aros dorados</h3>
                    <p>Glamur</p>
                    <a class="buy-now" href="https://wa.me/2613334940?text=Holaaa! Estuve mirando tu web y me interesa consultarte sobre unos productos." target="_blank">Consultar</a>
                </div>
            </div>

            <div class="item">
                <div class="item-image" style="background-image: url('imagenes/serpientes.jpeg');"></div>
                <div class="item-desc">
                    <h3>Aros Serpiente X</h3>
                    <p>Estilo</p>
                    <a class="buy-now" href="https://wa.me/2613334940?text=Holaaa! Estuve mirando tu web y me interesa consultarte sobre unos productos." target="_blank">Consultar</a>
                </div>
            </div>
            <div class="item">
                <div class="item-image" style="background-image: url('imagenes/aros3.jpeg');"></div>
                <div class="item-desc">
                    <h3>Aros corazon  </h3>
                    <p> Glamur</p>
                    <a class="buy-now" href="https://wa.me/2613334940?text=Holaaa! Estuve mirando tu web y me interesa consultarte sobre unos productos." target="_blank">Consultar</a>
                </div>
            </div>
            <div class="item">
                <div class="item-image" style="background-image: url('imagenes/arosocho.jpeg');"></div>
                <div class="item-desc">
                    <h3>Aros infinito </h3>
                    <p>Estilo para tu día a día.</p>
                    <a class="buy-now" href="https://wa.me/2613334940?text=Holaaa! Estuve mirando tu web y me interesa consultarte sobre unos productos." target="_blank">Consultar</a>
                    </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
   

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        

$(document).ready(function() {
    $(".custom-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        autoplay: false,
        navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
        responsive: {
            0: {
                items: 1,
                nav: true,
            },
            768: {
                items: 2,
                nav: true,

            },
            1000: {
                items: 4,
                nav: true,
                stagePadding: 40,
                gap: 1

            }
        }
    });
});
    </script>
<?php
include("footer.php"); ?>

</body>

</html>