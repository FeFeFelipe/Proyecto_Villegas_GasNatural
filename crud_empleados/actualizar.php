<?php
    include("conexion.php");
    $con=conectar();


$sql="SELECT * FROM usuarios WHERE IDEm";
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
                                
                            <input type="hidden" name="IDEm" value="<?php echo $row['IDEm'] ?>">
                                <input type="text" class="form-control mb-3" name="NomEm" placeholder="Nombre empleado" value="<?php echo $row['NomEm'] ?>">
                                <input type="text" class="form-control mb-3" name="ApelEm" placeholder="Apellido empleado" value="<?php echo $row['ApelEm'] ?>">
                                <input type="text" class="form-control mb-3" name="Cont" placeholder="Contrasena" value="<?php echo $row['Cont'] ?>">
                                <input type="text" class="form-control mb-3" name="Puesto" placeholder="Puesto empleado" value="<?php echo $row['Puesto'] ?>">
                            <input type="submit" class="btn btn-primary btn-block" value="actualizar">
                    </form>    

                </div>         
    </body>
</html>