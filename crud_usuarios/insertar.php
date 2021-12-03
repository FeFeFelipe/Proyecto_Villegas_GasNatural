<?php
include("conexion.php");
$con=conectar();

$NomCal=$_POST['NomCal'];
$NumCas=$_POST['NumCas'];
$NomCol=$_POST['NomCol'];
$CodPos=$_POST['CodPos'];
$NomUs=$_POST['NomUs'];
$ApelUs=$_POST['ApelUs'];
$CorEle=$_POST['CorEle'];
$Cont=$_POST['Cont'];
$IDUs=$_POST['IDUs'];

$sql="INSERT INTO usuarios VALUES('$NomCal', '$NumCas', '$NomCol', '$CodPos', '$NomUs', '$ApelUs', '$CorEle', '$Cont', '$IDUs')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: usuario.php");

}else {
}
?>