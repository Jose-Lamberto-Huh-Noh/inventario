<?php

include("conexion.php");
$con=conectar();

$id_producto=$_GET['id'];

$sql="DELETE FROM producto  WHERE id_producto='$id_producto'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: producto.php");
    }
?>
