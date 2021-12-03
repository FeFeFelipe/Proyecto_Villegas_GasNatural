<?php
include("conexion.php");
$con=conectar();

$NomEm=$_POST['NomEm'];
$ApelEm=$_POST['ApelEm'];
$Cont=$_POST['Cont'];
$Puesto=$_POST['Puesto'];
$IDEm=$_POST['IDEm'];

$sql="INSERT INTO empleados VALUES('$IDEm', '$NomEm', '$ApelEm', '$Cont', '$Puesto')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: empleado.php");

}else {
}
?>