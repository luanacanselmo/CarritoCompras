<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - EMEYCE</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            line-height: 1.6;
            background-color: #FFF5F7;
            margin: 0;
            padding: 0;
            min-height: 100vh;
        }

        /* Estilos de la cabecera */
        header {
            background-color: #fff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 5px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .logo {
            display: flex;
            align-items: center;
            font-size: 1.5rem;
            font-weight: bold;
            color: #000;
        }

        .logo img {
            height: 40px;
            margin-left: 10px;
        }

        .nav-links {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .nav-links li {
            margin-left: 20px;
        }

        .nav-links a {
            text-decoration: none;
            color: #000;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-links a:hover,
        .nav-links a.active {
            color: #db2777;
        }

        .hamburger {
            display: none;
            cursor: pointer;
            background: none;
            border: none;
            font-size: 1.5rem;
        }

        /* Estilos del login */

/* Estilos del login */
.main-content {
            padding-top: 75px;
            min-height: 100vh;
            width: 100%;
        }

        .login-container {
            width: 100%;
            min-height: calc(100vh - 75px);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .login-card {
            background-color: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(20px);
            border-radius: 16px;
            border: 1px solid rgba(213, 63, 140, 0.12);
            padding: 3rem;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 20px 40px rgba(213, 63, 140, 0.08);
        }

        .login-title {
            color: #D53F8C;
            font-size: 1.8rem;
            font-weight: 600;
            text-align: center;
            margin: 0 0 2rem 0;
            font-family: 'Outfit', sans-serif;
            letter-spacing: -0.02em;
        }

        .form-group {
            margin-bottom: 1.5rem;
            width: 100%;
        }

        .form-label {
            display: block;
            color: #374151;
            font-size: 0.875rem;
            font-weight: 500;
            margin-bottom: 0.5rem;
            letter-spacing: -0.01em;
        }

        .form-input {
            width: 100%;
            padding: 0.875rem 1rem;
            border: 1.5px solid rgba(213, 63, 140, 0.2);
            border-radius: 12px;
            font-size: 0.95rem;
            transition: all 0.2s ease;
            background-color: rgba(255, 255, 255, 0.8);
            color: #374151;
            font-weight: 400;
        }

        .form-input:focus {
            outline: none;
            border-color: #D53F8C;
            box-shadow: 0 0 0 3px rgba(213, 63, 140, 0.1);
            background-color: #fff;
        }

        .form-input::placeholder {
            color: #9CA3AF;
            font-weight: 400;
        }

        .password-wrapper {
            position: relative;
            width: 100%;
        }

        .toggle-password {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #9CA3AF;
            cursor: pointer;
            font-size: 1.1rem;
            padding: 6px;
            border-radius: 6px;
            transition: all 0.2s ease;
            width: 32px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .toggle-password:hover {
            background-color: rgba(213, 63, 140, 0.08);
            color: #D53F8C;
        }

        .submit-btn {
            width: 100%;
            padding: 0.875rem;
            background: linear-gradient(135deg, #D53F8C 0%, #EC4899 100%);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 0.95rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s ease;
            margin-top: 1.5rem;
            letter-spacing: -0.01em;
        }

        .submit-btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 8px 25px rgba(213, 63, 140, 0.25);
            background: linear-gradient(135deg, #BE185D 0%, #DB2777 100%);
        }

        .submit-btn:active {
            transform: translateY(0);
        }

        .error-message {
            background-color: rgba(254, 242, 242, 0.8);
            border: 1px solid rgba(252, 165, 165, 0.5);
            color: #DC2626;
            padding: 0.75rem 1rem;
            border-radius: 10px;
            margin-top: 1rem;
            font-size: 0.875rem;
            text-align: center;
            font-weight: 400;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background-color: #fff;
                box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
                z-index: 999;
            }

            .nav-links.show {
                display: flex;
            }

            .nav-links li {
                margin: 0;
                text-align: center;
            }

            .nav-links a {
                display: block;
                padding: 1rem;
            }

            .hamburger {
                display: block;
            }

            .main-content {
                padding-top: 60px;
            }
            
            .login-container {
                min-height: calc(100vh - 60px);
                padding: 15px;
                align-items: flex-start;
                padding-top: 50px;
            }
            
            .login-card {
                padding: 2rem;
                max-width: 100%;
                border-radius: 12px;
            }

            .login-title {
                font-size: 1.8rem;
                margin-bottom: 1.5rem;
            }

            .form-input {
                padding: 0.8rem;
                font-size: 16px;
            }

            .submit-btn {
                padding: 0.9rem;
                font-size: 1rem;
            }

            /* Cuando el menú está abierto, ajustar el contenido */
            .nav-links.show ~ .main-content {
                padding-top: 200px;
            }
        }

        @media (max-width: 480px) {
            .main-content {
                padding-top: 55px;
            }
            
            .login-container {
                min-height: calc(100vh - 55px);
                padding: 10px;
                padding-top: 30px;
            }
            
            .login-card {
                padding: 1.5rem;
                border-radius: 10px;
            }

            .login-title {
                font-size: 1.6rem;
                margin-bottom: 1.2rem;
            }
            
            .form-group {
                margin-bottom: 1.2rem;
            }
            
            .form-label {
                font-size: 0.9rem;
            }
            
            .form-input {
                padding: 0.75rem;
            }
        }
    </style>
</head>

<body>
    <header>
        <nav class="nav-container">
            <div class="logo">
                EMEYCE
                <img src="imagenes/WhatsApp Image 2024-10-11 at 20.08.00.jpeg" alt="EMEYCE Logo">
            </div>
            <ul class="nav-links" id="navLinks">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="productos.php">Productos</a></li>
                <li><a href="contacto.php">Contacto</a></li>
                <li><a href="login.php" class="active">Iniciar sesión</a></li>
            </ul>
            <button class="hamburger" id="hamburger">☰</button>
        </nav>
    </header>
    <div class="main-content">
        <div class="login-container">
            <div class="login-card">
                <h1 class="login-title">Bienvenida</h1>
                <form id="login-form" action="control.php" method="post">
                    <div class="form-group">
                        <label for="usuario" class="form-label">Usuario</label>
                        <input type="text" id="usuario" name="usuario" class="form-input" placeholder="Ingrese su usuario" required>
                    </div>
                    <div class="form-group">
                        <label for="contrasena" class="form-label">Contraseña</label>
                        <div class="password-wrapper">
                            <input type="password" id="contrasena" name="contrasena" class="form-input" placeholder="Ingrese su contraseña" required>
                            <button type="button" class="toggle-password" onclick="togglePassword()">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                    <circle cx="12" cy="12" r="3"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <button type="submit" class="submit-btn">Acceder</button>
                </form>
                <div id="error-message" class="error-message" style="display: none;"></div>
            </div>
        </div>
    </div>

    <script>
        // JavaScript para el menú hamburguesa
        const hamburger = document.getElementById('hamburger');
        const navLinks = document.getElementById('navLinks');

        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('show');
        });

        // JavaScript para toggle de contraseña
        function togglePassword() {
            const passwordInput = document.getElementById('contrasena');
            const toggleButton = document.querySelector('.toggle-password');
            const eyeIcon = toggleButton.querySelector('svg');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.innerHTML = `
                    <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94L17.94 17.94z"/>
                    <line x1="1" y1="1" x2="23" y2="23"/>
                    <path d="M10.12 8.88A3 3 0 1 0 15.12 13.88L10.12 8.88z"/>
                `;
            } else {
                passwordInput.type = 'password';
                eyeIcon.innerHTML = `
                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                    <circle cx="12" cy="12" r="3"/>
                `;
            }
        }

        // Cerrar menú al hacer click fuera
        document.addEventListener('click', (e) => {
            if (!hamburger.contains(e.target) && !navLinks.contains(e.target)) {
                navLinks.classList.remove('show');
            }
        });
    </script>
</body>

</html>