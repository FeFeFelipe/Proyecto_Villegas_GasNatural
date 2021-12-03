<?php

include("conexion.php");
$con=conectar();

$IdSuc=$_GET['id'];

$sql="DELETE FROM sucursales WHERE IdSuc='$IdSuc'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: sucursal.php");
    }
?>