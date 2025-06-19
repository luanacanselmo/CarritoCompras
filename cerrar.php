<?php $url="http://".$_SERVER['HTTP_HOST']."/emeyce" ?>
<?php 

session_start();
session_destroy();
header('Location: index.php');

?>