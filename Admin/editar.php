<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cabecera.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Formulario de citas</title>
</head>
<body>

<div class="espacio-tabla">
    <table class="table table-dark table-striped">
  <thead>
  </thead>
  <tbody>
<?php
$conexion=mysqli_connect("localhost", "root", "", "geastore");
    $id =$_GET['id'];
    $sql="SELECT * FROM productos  where id='$id'";
    $result=mysqli_query($conexion, $sql);
    while($mostrar = mysqli_fetch_array($result)){
    
?>
    <form action="procesar_editar.php" method="post">
        <input type="hidden" value="<?php echo $mostrar['id'] ?>" name="txtid">
        <p>Nombre</p>
        <input type="text" value="<?php echo $mostrar['nombre_productos'] ?>" name="txtnombre">
        <p>Categoria</p>
        <input type="text" value="<?php echo $mostrar['categoria_productos'] ?>" name="txtcategoria">
        <p>Marca</p>
        <input type="text" value="<?php echo $mostrar['marca_productos'] ?>" name="txtmarca">
        <p>Precio</p>
        <input type="text" value="<?php echo $mostrar['precio_productos'] ?>" name="txtprecio">
        <p>Cantidad</p>
        <input type="text" value="<?php echo $mostrar['cantidad_productos'] ?>" name="txtcantidad">
    

    <?php
    }
    ?>
    <input type="submit" value="actualizar">
    </form>

  </tbody>
</table>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    
</body>
</html>