<?php
$conexion=mysqli_connect("localhost", "root", "", "geastore");
$id=$_POST['txtid'];
$nombre=$_POST['txtnombre'];
$categoria=$_POST['txtcategoria'];
$marca=$_POST['txtmarca'];
$precio=$_POST['txtprecio'];
$cantidad=$_POST['txtcantidad'];

mysqli_query($conexion, "UPDATE `usuarios1` SET `usuario` = '$usuario', `contraseña` = '$contraseña'WHERE `ID` = '$ID'") or die (error);

 mysqli_close($conexion);
 header("location:crud_productos.php");
?>