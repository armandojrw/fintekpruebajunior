<?php
    include 'conexion.php';
    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];

        $delete="DELETE FROM productos WHERE id=$id";
        $deleteproductos=mysqli_query($conexion,$delete);
        if($deleteproductos){
            header('location:index.php');
         }else{
            die("No se pudo conectar a la base de datos ".mysqli_error());
         }
    }
?>