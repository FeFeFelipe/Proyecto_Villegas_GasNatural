<?php
include("conexion.php");
$con=conectar();

$IdSuc=$_POST['IdSuc'];
$NomSuc=$_POST['NomSuc'];
$NomCal=$_POST['NomCal'];
$NomCol=$_POST['NomCol'];
$CodPos=$_POST['CodPos'];
$EntFed=$_POST['EntFed'];

$sql="INSERT INTO sucursales VALUES('$IdSuc', '$NomSuc', '$NomCal', '$NomCol', '$CodPos', '$EntFed')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: sucursal.php");

}else {
}
?>