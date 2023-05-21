<?php
    require './conexion.php';
    if(isset($_POST['submit'])){
        $nombre=$_POST['nombre'];
        $descripcion=$_POST['descripción'];
        $precio=$_POST['precio'];
        $cantidad=$_POST['cantidad'];

        $insert="INSERT INTO `productos`(`id`, `nombre`, `descripción`, `precio`, `cantidad`) VALUES ('','$nombre','$descripcion','$precio','$cantidad')";
        $insertproductos=mysqli_query($conexion,$insert);
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
    <h1>FINTEK PRUEBA TÉCNICA NIVEL JUNIOR. BY ARMANDO WILLIAMS.</h1>
    <a href="./add_product.php"><button class="btn btn-info btn-lg"><b>Agregar Producto</b></button></a>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Acción</th>
        </tr>
        </thead>
        <tbody>
        <?php
            $sql="SELECT * FROM productos";
            $productos=mysqli_query($conexion,$sql); 
            if($productos){
                while($row=mysqli_fetch_assoc($productos)){
                    $id=$row['id'];
                    $nombre=$row['nombre'];
                    $descripcion=$row['descripción'];
                    $precio=$row['precio'];
                    $cantidad=$row['cantidad'];
                    echo '<tr>
                    <th scope="row">'.$id.'</th>
                    <td>'.$nombre.'</td>
                    <td>'.$descripcion.'</td>
                    <td>'.$precio.'</td>
                    <td>'.$cantidad.'</td>
                    <td>
                        <a href="edit_product.php?updateid='.$id.'"><button class="btn btn-warning">Editar</button></a>
                        <button class="btn btn-danger" data-toggle="modal" data-target="#deletemodal">Eliminar</button>
                    </td>
                    </tr><!-- Modal -->
                    <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            ¿Está seguro desea eliminar el producto ID '.$id.'?
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <a href="delete_product.php?deleteid='.$id.'"><button type="button" class="btn btn-primary">Eliminar</button></a>
                          </div>
                        </div>
                      </div>
                    </div>'
                    ;
                }
            }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>