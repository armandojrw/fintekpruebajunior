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
    <h2>Agregar Producto</h2>
    <form action="index.php" method="POST">
        <div class="form-group">
            <label>Nombre:</label>
            <input type="text" class="form-control" placeholder="Nombre Completo" name="nombre" required>
        </div>
        <div class="form-group">
            <label>Descripción:</label>
            <input type="text" class="form-control" placeholder="Descripción" name="descripción" required>
        </div>
        <div class="form-group">
            <label>Precio:</label>
            <input type="number" class="form-control" step="0.01" placeholder="0.00" name="precio" required>
        </div>
        <div class="form-group">
            <label>Cantidad:</label>
            <input type="number" class="form-control" placeholder="0" name="cantidad" required>
        </div>
        <div>
            <input type="submit" name="submit" value="Guardar" class="form-control btn btn-success"></input>   
        </div>
    </form>
</div>
</body>
</html>