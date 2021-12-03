<?php

include("conexion.php");
$con=conectar();

$IDEm=$_POST['IDEm'];
$NomEm=$_POST['NomCal'];
$ApelEm=$_POST['NumCas'];
$Cont=$_POST['NomCol'];
$Puesto=$_POST['CodPos'];

$sql="UPDATE empleados SET NomEm='$NomEm', ApelEm='$ApelEm', Cont='$Cont', Puesto='$Puesto' WHERE IDEm='$IDEm'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleado.php");
    }
?>