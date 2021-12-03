<?php

include("conexion.php");
$con=conectar();

$IDV=$_GET['id'];

$sql="DELETE FROM ventas WHERE IDV='$IDV'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: venta.php");
    }
?>