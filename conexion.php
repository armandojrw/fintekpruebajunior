<?php
$conexion=mysqli_connect("localhost","root","","gestion_productos");

        if(!$conexion){
            die("No se pudo conectar a la base de datos ".mysqli_error());
        }
        //mysqli_close($conexion);
?>