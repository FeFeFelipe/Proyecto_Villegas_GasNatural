<?php
include("conexion.php");
$con=conectar();

$IDV=$_POST['IDV'];
$IDUs=$_POST['IDUs'];
$IdSuc=$_POST['IdSuc'];
$IDEm=$_POST['IDEm'];
$GasLit=$_POST['GasLit'];
$Costo=$_POST['Costo'];
$Fecha=$_POST['Fecha'];
$Hora=$_POST['Hora'];

$sql="INSERT INTO ventas VALUES('$IDV', '$IDUs', '$IdSuc', '$IDEm', '$GasLit', '$Costo', '$Fecha', '$Hora',)";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: venta.php");

}else {
}
?>