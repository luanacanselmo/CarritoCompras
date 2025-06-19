<?php session_start();
include("bd.php");
//verificamos si el usuario y contraseña es válido
$base = false;

foreach ($usuarios as  $usuario) {
    if ($_POST["usuario"] == $usuario['usuario'] && $_POST["contrasena"] == $usuario['password']) {
        $_SESSION["autentificado"] = "1";
        $_SESSION["user"] = $_POST["usuario"];
        $_SESSION["pass"] = $_POST["contrasena"];
        $usuarioAutenticado = $usuario;
        
        if ($usuario['roll'] == '1') {
            header("location: inicio.php");
        } elseif ($usuario['roll'] == '2') {
            header("location: index1.php");
        }
        
        $base = true;
        break;
    }
}
if (!$base) {
    header("location: index1.php?errorusuario=si");
}

?>