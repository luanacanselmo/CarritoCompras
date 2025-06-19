<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Footer Responsive</title>
  <!-- Enlace a Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
    }

    /* Footer Container */
    .footer-container {
      display: flex;
      justify-content: space-between;
      align-items: stretch; /* Asegura que todos los divs tengan la misma altura */
      background-color: #FADADD;
      padding: 0;
      height: 150px; /* Ajusta la altura del footer */
      margin-top: 40px;

    }

    /* Divs del Footer */
    .footer-section {
      flex: 1; /* Los divs del footer ocupan el mismo espacio */
      text-align: center;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      gap: 10px;
    }

    /* Fondo blanco solo para el div del logo */
    .logo-section {
      background-color: white; /* Fondo blanco solo en la sección del logo */
      padding: 10px;
    }

    .footer-section h3 {
      color: black;
      font-size: 14px;
    }

    .footer-section a {
      color: black;
      text-decoration: none;
    }

    .footer-section a:hover {
      text-decoration: underline;
    }

    /* Ajusta el tamaño de la imagen */
    .logo-section img {
      max-width: 30%; /* Limita el tamaño de la imagen al 50% del ancho del div */
      height: auto; /* Mantiene la proporción */
    }

    /* Estilos para los iconos */
    .footer-section .icon {
      font-size: 24px; /* Tamaño de los iconos */
      color: black; /* Color de los iconos */
    }

    .footer-section a {
      color: black; /* Color de los enlaces */
      display: flex;
      align-items: center;
      gap: 8px;
    }

    /* Responsivo para pantallas móviles */
    @media (max-width: 768px) {
      .footer-container {
        flex-direction: column; /* Cambia la disposición a columna en pantallas pequeñas */
        height: auto;
      }

      .footer-section {
        padding: 15px 0; /* Ajusta el padding para pantallas pequeñas */
      }

      .logo-section {
        margin-bottom: 15px; /* Ajusta el espaciado para pantallas móviles */
      }

      /* Ajusta la imagen en pantallas móviles */
      .logo-section img {
        max-width: 70%; /* Haz que la imagen sea un poco más grande en pantallas pequeñas */
      }
    }
  </style>
</head>
<body>

  <footer class="footer-container">
    <div class="footer-section">
      <i class="fas fa-phone icon"></i> <!-- Icono de teléfono -->
      <h3>+54 2613334940</h3>
    </div>
    <div class="footer-section logo-section">
      <img src="imagenes/logosinfondo.JPG" alt="Imagen Logo">
    </div>
    <div class="footer-section">
      <!-- Iconos y links de redes sociales -->
      <a href="https://wa.me/2613334940?text= Holaaa! Estuve mirando tu web y me interesa consultarte sobre unos productos. " target="_blank"><i class="fab fa-whatsapp icon"></i> WhatsApp</a>
      <a href="https://www.instagram.com/emeyce_ventas?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank"><i class="fab fa-instagram icon"></i> Instagram</a>
    </div>
  </footer>

</body>
</html>
