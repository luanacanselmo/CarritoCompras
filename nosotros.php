<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Título</title>
    <style>
        /* Estilos generales */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .jumbotron {
            padding: 20px;
            text-align: center;
        }

             /* Estilos para los cards */
             .cards-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .cardd1,
        .cardd2 {
            flex: 1;
            padding: 20px;
            box-sizing: border-box;
            max-width: 400px; /* Ajusta el ancho máximo según tus necesidades */
        }

        img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: auto;
        }

    </style>
</head>

<body>
    <!-- Tu contenido HTML -->
    <?php include("template/cabecera.php"); ?>

    <div class="jumbotron">
        <h1 class="display-3">NOSOTRAS</h1>
        <hr class="my-2">
        <br><br>
<parent>
        <div class="cards-container">
            <div class="cardd1">
                <p class="lead" style="margin-top: 30px;">Hola somos ailumaga, comenzamos nuestra linda experiencia con la cerámica a mediados del 2020. Buscamos una forma de poder llevar la cuarentena y qué mejor que de la mano de la cerámica.</p>
            </div>

            <div class="cardd2">
                <img src="tetera.jpeg" alt="">
            </div>
        </div>
        <br><br>

        <div class="cards-container">
            <div class="cardd1">
                <br>
                <img src="barro.jpg" alt="">
            </div>

            <div class="cardd2">
                <p class="lead" style="margin-top: 30px;">Todos nuestros productos son 100% de barro. La cerámica tiene un largo proceso; primero las hacemos, luego las perfeccionamos, las bruñimos y las cocinamos.</p>
            </div>
        </div>
    </div>
    <br><br>

    <div class="cards-container">
            <div class="cardd1">
                <p class="lead" style="margin-top: 30px;">Hola somos ailumaga, comenzamos nuestra linda experiencia con la cerámica a mediados del 2020. Buscamos una forma de poder llevar la cuarentena y qué mejor que de la mano de la cerámica.</p>
            </div>

            <div class="cardd2">
                <img src="corazon.jpeg" alt="">
            </div>
        </div>

    </parent>

    <?php include("template/pie.php"); ?>
</body>

</html>
