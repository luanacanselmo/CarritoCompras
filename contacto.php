<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información Personal</title>

    <style>
        * {
            padding: 0;
            margin: 0;
        }

        header {
            background-color: #fff;
            padding: 14px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            font-family: 'Montserrat', sans-serif;


        }

        .bodysi {
            background-color: #FFF0F5;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }


        .containerr {
            width: 100%;
            max-width: 600px;
            padding: 20px;
            margin-top: 60px;
        }

        .card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 30px;
            text-align: center;
        }

        .profile-image {
            width: 128px;
            height: 128px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto 20px;
        }

        .profile-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        h1 {
            color: #D8336B;
            margin-bottom: 5px;
        }

        .title {
            color: #FF69B4;
            margin-bottom: 20px;
        }

        .description {
            color: #D8336B;
            margin-bottom: 20px;
        }

        .contact-info {
            margin-bottom: 20px;
        }

        .contact-info p {
            color: #D8336B;
            margin: 10px 0;
        }

        .icon {
            margin-right: 10px;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .button {
            background-color: #FFE4E1;
            color: #D8336B;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #FFB6C1;
        }

        @media (max-width: 768px) {
            .containerr {
                padding: 10px;
            }

            .card {
                padding: 20px;
            }


        }
    </style>

</head>
<?php include("cabeceraemeyce.php"); ?>

<div class="bodysi">

    <div class="containerr">
        <div class="card">
            <div class="profile-image">
                <img src="imagenes/WhatsApp Image 2024-10-11 at 20.08.00.jpeg" alt="Foto del dueño">
            </div>
            <h1>Candela Avila</h1>
            <p class="title">Emprendedora</p>

            <p class="description">
                Me encanta la belleza y ayudar a las personas
                a encontrar esas piezas únicas que hacen brillar
                su estilo. Si buscas algo especial o simplemente queres lucir genial,
                ¡acá estoy para ayudarte a elegir el accesorio perfecto!


            </p>

            <div class="contact-info">
                <p><span class="icon"></span>emeyce_ventas</p>
                <p><span class="icon">📞</span> 2613334940</p>
                <p><span class="icon">📍</span> Lavalle, Mendoza</p>
            </div>

            <div class="social-links">
                <a href="https://www.instagram.com/emeyce_ventas/" class="button">Instagram</a>
                <a href="https://wa.me/2613334940?text= Holaaa! Estuve mirando tu web y me interesa consultarte sobre unos productos. " target="_blank" class="button"> WhatsApp</a>

            </div>
        </div>
    </div>



</div>

</html>