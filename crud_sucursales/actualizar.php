<?php
    include("conexion.php");
    $con=conectar();


$sql="SELECT * FROM sucursales WHERE IdSuc";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                                
                            <input type="hidden" name="IdSuc" value="<?php echo $row['IdSuc'] ?>">
                                <input type="text" class="form-control mb-3" name="NomSuc" placeholder="Nombre sucursal" value="<?php echo $row['NomSuc'] ?>">
                                <input type="text" class="form-control mb-3" name="NomCal" placeholder="Nombre calle" value="<?php echo $row['NomCal'] ?>">
                                <input type="text" class="form-control mb-3" name="NomCol" placeholder="Nombre colonia" value="<?php echo $row['NomCol'] ?>">
                                <input type="text" class="form-control mb-3" name="CodPos" placeholder="Codigo postal" value="<?php echo $row['CodPos'] ?>">
                                <input type="text" class="form-control mb-3" name="EntFed" placeholder="Entidad federativa" value="<?php echo $row['EntFed'] ?>">
                            <input type="submit" class="btn btn-primary btn-block" value="actualizar">
                    </form>    

                </div>         
    </body>
</html>