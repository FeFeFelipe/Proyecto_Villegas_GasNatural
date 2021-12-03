<?php
    include("conexion.php");
    $con=conectar();


$sql="SELECT * FROM ventas WHERE IDV";
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
                                
                            <input type="hidden" name="IDV" value="<?php echo $row['IDV'] ?>">
                                <input type="text" class="form-control mb-3" name="IDUs" placeholder="ID del usuario" value="<?php echo $row['IDUs'] ?>">
                                <input type="text" class="form-control mb-3" name="IdSuc" placeholder="ID de la sucursal" value="<?php echo $row['IdSuc'] ?>">
                                <input type="text" class="form-control mb-3" name="IDEm" placeholder="ID del empleado" value="<?php echo $row['IDEm'] ?>">
                                <input type="text" class="form-control mb-3" name="GasLit" placeholder="Cantidad de litros" value="<?php echo $row['GasLit'] ?>">
                                <input type="text" class="form-control mb-3" name="Costo" placeholder="Costo" value="<?php echo $row['Costo'] ?>">
                                <input type="text" class="form-control mb-3" name="Fecha" placeholder="Fecha" value="<?php echo $row['Fecha'] ?>">
                                <input type="text" class="form-control mb-3" name="Hora" placeholder="Hora" value="<?php echo $row['Hora'] ?>">
                            <input type="submit" class="btn btn-primary btn-block" value="actualizar">
                    </form>    

                </div>         
    </body>
</html>