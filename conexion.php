<?php
 
$host ="localhost";
$user = "root";
$pass = "";
$db = "empleados";

$conexion = mysqli_connect($host, $user, $pass,$db );
mysqli_set_charset($conexion, "utf8");


?>