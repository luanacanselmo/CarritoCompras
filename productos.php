<?php
include("bd.php");

$accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";

// Inicializamos la sentencia SQL por defecto, que mostrará todos los productos
$sentenciaSQL = $conexion->prepare("SELECT * FROM productos");

// Verificamos si se ha enviado una categoría y usamos un switch para las consultas
switch ($accion) {
  case "Pulseras":
    $sentenciaSQL = $conexion->prepare("SELECT * FROM productos WHERE categoria = 6");
    break;

  case "Aros":
    $sentenciaSQL = $conexion->prepare("SELECT * FROM productos WHERE categoria = 1");
    break;

  case "Collares":
    $sentenciaSQL = $conexion->prepare("SELECT * FROM productos WHERE categoria = 3");
    break;

  case "Tobilleras":
    $sentenciaSQL = $conexion->prepare("SELECT * FROM productos WHERE categoria = 5");
    break;
  case "Belleza":
    $sentenciaSQL = $conexion->prepare("SELECT * FROM productos WHERE categoria = 7");
    break;
  case "Todo":
    $sentenciaSQL = $conexion->prepare("SELECT * FROM productos");
    break;

  default:
    // Si no se selecciona ninguna categoría, mostramos todos los productos
    $sentenciaSQL = $conexion->prepare("SELECT * FROM productos");
    break;
}

$sentenciaSQL->execute();
$listaProductos = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Productos</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300&family=Quicksand&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
  <style>
    * {
      padding: 0;
      margin: 0;
    }

    body {
      font-family: 'Inter', sans-serif;

    }

    header {
      background-color: #fff;
      padding: 14px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      font-family: 'Montserrat', sans-serif;


    }


    .card {
      height: 100%;
      transition: transform 0.3s;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card-img-top {
      height: 200px;
      object-fit: cover;
    }

    .card-title {
      font-family: 'Quicksand', sans-serif;
      font-size: 1.1rem;
    }

    .ov-btn-slide-left {
      text-align: center;
      background: #fff;
      color: black;
      border: 2px solid black;
      border-radius: 20px;
      padding: 8px 16px;
      font-size: 0.9rem;
      position: relative;
      z-index: 1;
      overflow: hidden;
      display: inline-block;
      text-decoration: none;
      transition: color 0.3s ease;
    }

    .ov-btn-slide-left::after {
      content: "";
      background-color: #FADADD;
      position: absolute;
      z-index: -1;
      padding: 16px 20px;
      display: block;
      left: -100%;
      right: 100%;
      top: 0;
      bottom: 0;
      transition: all 0.35s;
    }

    .ov-btn-slide-left:hover {
      color: black;
    }

    .ov-btn-slide-left:hover::after {
      left: 0;
      right: 0;
      top: 0;
      bottom: 0;
    }

    .jumbotron {
      text-align: center;
      font-family: 'Montserrat', sans-serif;
      font-weight: bold;
    }

    .jumbotron h1 {
      margin-top: 100px;
    }

    .categories {
      padding: 20px 0;
      text-align: center;
    }

    .categories h2 {
      font-size: 32px;
      margin-bottom: 20px;
    }

    .category-grid {
      display: flex;
      justify-content: center;
      gap: 20px;
    }

    .category-card {
      background-color: #fff;
      padding: 20px;
      width: 150px;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      cursor: pointer;
      transition: transform 0.3s;
    }

    .category-card:hover {
      transform: scale(1.05);
    }

    .boton {
      all: unset;

    }

    @media (max-width: 768px) {

      /* Ajusta la sección de categorías */
      .categories h2 {
        font-size: 28px;
      }

      .category-grid {
        flex-direction: column;
        gap: 10px;
      }

      .category-card {
        width: 90%;
        margin: 0 auto;
      }



      /* Ajusta el footer */

    }
  </style>
</head>

<body>
  <?php
  include("cabeceraemeyce.php"); ?>
  <div class="jumbotron">
    <h1 class="display-4">PRODUCTOS</h1>
    <hr class="my-4">
  </div>

  <section class="categories">
    <form method="POST">
      <div class="category-grid">
        <button class="boton" type="submit" name="accion" value="Pulseras">
          <div class="category-card">Pulseras</div>
        </button>

        <button class="boton" type="submit" name="accion" value="Aros">
          <div class="category-card">Aros</div>
        </button>

        <button class="boton" type="submit" name="accion" value="Collares">
          <div class="category-card">Collares</div>
        </button>

        <button class="boton" type="submit" name="accion" value="Tobilleras">
          <div class="category-card">Tobilleras</div>
        </button>

        <button class="boton" type="submit" name="accion" value="Belleza">
          <div class="category-card">Belleza</div>
      <button class="boton" type="submit" name="accion" value="Todo">
          <div class="category-card">Todo</div>
      </div>
    </form>
  </section>



  <div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
      <?php foreach ($listaProductos as $producto) { ?>
        <div class="col">
          <div class="card h-100">
            <img class="card-img-top" src="./img/<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['nombre']; ?>">
            <div class="card-body d-flex flex-column">
              <h4 class="card-title">
                <?php echo $producto['nombre']; ?><br>
                $<?php echo $producto['precio']; ?>
              </h4>
              <a href="https://www.instagram.com/emeyce_ventas/" class="ov-btn-slide-left mt-auto">Consultar</a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>

  <?php
  include("footer.php"); ?>


</body>

</html>