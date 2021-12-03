<?php

include("conexion.php");
$con=conectar();

$IDUs=$_GET['id'];

$sql="DELETE FROM usuarios WHERE IDUs='$IDUs'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: usuario.php");
    }
?>