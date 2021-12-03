<?php

include("conexion.php");
$con=conectar();

$IDUs=$_POST['IDUs'];
$NomCal=$_POST['NomCal'];
$NumCas=$_POST['NumCas'];
$NomCol=$_POST['NomCol'];
$CodPos=$_POST['CodPos'];
$NomUs=$_POST['NomUs'];
$ApelUs=$_POST['ApelUs'];
$CorEle=$_POST['CorEle'];
$Cont=$_POST['Cont'];

$sql="UPDATE usuarios SET NomCal='$NomCal', NumCas='$NumCas', NomCol='$NomCol', CodPos='$CodPos', NomUs='$NomUs', ApelUs='$ApelUs', CorEle='$CorEle', Cont='$Cont' WHERE IDUs='$IDUs'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: usuario.php");
    }
?>