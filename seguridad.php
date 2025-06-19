<?php

session_start();
if ($_SESSION["autentificado"] != "1") {
    header("location: inicio.php");
  exit();
}
?>
