<?php

include("conexion.php");
$con=conectar();

$IDEm=$_GET['id'];

$sql="DELETE FROM empleados WHERE IDEm='$IDEm'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleado.php");
    }
?>