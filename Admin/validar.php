<?php
$conexion=mysqli_connect("localhost", "root", "", "geastore");

$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;



$consulta="SELECT*FROM administrador where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_fetch_array($resultado);
header("location:crud_productos.php");

mysqli_free_result($resultado);
mysqli_close($conexion);