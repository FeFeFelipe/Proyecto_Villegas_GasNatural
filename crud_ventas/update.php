<?php

include("conexion.php");
$con=conectar();

$IDV=$_POST['IDV'];
$IDUs=$_POST['IDUs'];
$IdSuc=$_POST['IdSuc'];
$IDEm=$_POST['IDEm'];
$Gaslit=$_POST['GasLit'];
$Costo=$_POST['Costo'];
$Fecha=$_POST['Fecha'];
$Hora=$_POST['hora'];

$sql="UPDATE ventas SET IDUs='$IDUs', IdSuc='$IdSuc', IDEm='$IDEm', GasLit='$GasLit', Costo='$Costo', Fecha='$Fecha', Hora='$Hora', WHERE IDV='$IDV'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: venta.php");
    }
?>