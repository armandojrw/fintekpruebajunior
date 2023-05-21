<?php
 require './conexion.php';
 $id=$_GET['updateid'];
 $edit="SELECT * FROM productos WHERE id=$id";
 $editproductos=mysqli_query($conexion,$edit);
 
 $row=mysqli_fetch_assoc($editproductos);
    $nombre=$row['nombre'];
    $descripcion=$row['descripción'];
    $precio=$row['precio'];
    $cantidad=$row['cantidad'];

 if(isset($_POST['submit'])){
     $nombre=$_POST['nombre'];
     $descripcion=$_POST['descripción'];
     $precio=$_POST['precio'];
     $cantidad=$_POST['cantidad'];

     $edit="UPDATE productos SET id='$id',nombre='$nombre',descripción='$descripcion',precio='$precio',cantidad='$cantidad' WHERE id='$id'";
     $editproductos=mysqli_query($conexion,$edit);
     if($editproductos){
        header('location:index.php');
     }else{
        die("No se pudo conectar a la base de datos ".mysqli_error());
     }
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<a href="index.php"><button class="btn btn-warning">Regresar</button></a>
    <h2>Editar Producto</h2>
    <form method="POST">
        <div class="form-group">
            <label>Nombre:</label>
            <input type="text" class="form-control" placeholder="Nombre Completo" name="nombre" value="<?php echo $nombre?>" required>
        </div>
        <div class="form-group">
            <label>Descripción:</label>
            <input type="text" class="form-control" placeholder="Descripción" name="descripción" value="<?php echo $descripcion?>" required>
        </div>
        <div class="form-group">
            <label>Precio:</label>
            <input type="number" class="form-control" step="0.01" placeholder="0.00" name="precio" value="<?php echo $precio?>" required>
        </div>
        <div class="form-group">
            <label>Cantidad:</label>
            <input type="number" class="form-control" placeholder="0" name="cantidad" value="<?php echo $cantidad?>" required>
        </div>
        <div>
            <input type="submit" name="submit" class="form-control btn btn-success"></input>   
        </div>
    </form>
</div>
</body>
</html>