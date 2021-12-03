<?php

include("conexion.php");
$con=conectar();

$IdSuc=$_POST['IdSuc'];
$NomCal=$_POST['NomCal'];
$NomCol=$_POST['NomCol'];
$CodPos=$_POST['CodPos'];
$EntFed=$_POST['EntFed'];

$sql="UPDATE sucursales SET NomCal='$NomCal', NomCol='$NomCol', CodPos='$CodPos', EntFed='$EntFed', WHERE IdSuc='$IdSuc'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: sucursal.php");
    }
?>