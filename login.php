<?php
include("cabeceraemeyce.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            /* font-family: 'Poppins', sans-serif; */
            background-color: #FFF5F7;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            width: 100%;
            height: 100%;
        }

        .login-card {
            background-color: #FFFFFF;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            width: 100%;
            max-width: 400px;
        }

        .login-title {
            color: #D53F8C;
            font-size: 2.5rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 2rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
            display: flex;
            flex-direction: column;
            align-items: stretch;
        }

        .form-label {
            display: block;
            color: #97266D;
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .form-input {
            width: 100%;
            padding: 0.75rem;
            border: 2px solid #FBB6CE;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
            box-sizing: border-box;
        }

        .form-input:focus {
            outline: none;
            border-color: #D53F8C;
            box-shadow: 0 0 0 3px rgba(213, 63, 140, 0.2);
        }

        .password-wrapper {
            position: relative;
            width: 100%;
        }

        .toggle-password {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #D53F8C;
            cursor: pointer;
        }

        .submit-btn {
            width: 100%;
            padding: 1rem;
            background: linear-gradient(to right, #ED64A6, #D53F8C);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 6px rgba(213, 63, 140, 0.3);
        }

        .error-message {
            background-color: #FFF5F5;
            border: 1px solid #FEB2B2;
            color: #C53030;
            padding: 0.75rem;
            border-radius: 8px;
            margin-top: 1rem;
            font-size: 0.9rem;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="login-card">
        <h1 class="login-title">Iniciar Sesión</h1>
        <form id="login-form" action="control.php" method="post">
            <div class="form-group">
                <label for="usuario" class="form-label">Usuario</label>
                <input type="text" id="usuario" name="usuario" class="form-input" placeholder="Ingrese su usuario" required>
            </div>
            <div class="form-group">
                <label for="contrasena" class="form-label">Contraseña</label>
                <div class="password-wrapper">
                    <input type="password" id="contrasena" name="contrasena" class="form-input" placeholder="Ingrese su contraseña" required>
                    <button type="button" class="toggle-password" onclick="togglePassword()">👁️</button>
                </div>
            </div>
            <button type="submit" class="submit-btn">Acceder</button>
        </form>
        <div id="error-message" class="error-message" style="display: none;"></div>
    </div>
</body>

</html>