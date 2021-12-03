<?php
    include("conexion.php");
    $con=conectar();

    $sql="SELECT * FROM empleados";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PaginaEmpleado</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    </head>
    <li><a href="/Proyecto_Villegas_GasNatural/index.php">Inicio</a></li> 
    <body>
            <div class="container mt-5">
                    <div class="row">

                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="NomEm" placeholder="Nombre empleado">
                                    <input type="text" class="form-control mb-3" name="ApelEm" placeholder="Apellidos empleado">
                                    <input type="password" class="form-control mb-3" name="Cont" placeholder="Contrasena">
                                    <input type="text" class="form-control mb-3" name="Puesto" placeholder="Puesto">
                                    <input type="text" class="form-control mb-3" name="IDEm" placeholder="ID empleado">

                                    <input type="submit" class="btn btn-primary">
                                </form>     
                        </div>
                        <div class="col-md-8">
                            <table class="table">
                                <thead class="table-sucess table-striped">
                                    <tr>
                                        <th>Nombre empleado</th>
                                        <th>Apellido empleado</th>
                                        <th>Contrasena</th>
                                        <th>Puesto</th>
                                        <th>ID</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php echo $row['NomEm']?></th>
                                                <th><?php echo $row['ApelEm']?></th>
                                                <th><?php echo $row['Cont']?></th>
                                                <th><?php echo $row['Puesto']?></th>
                                                <th><?php echo $row['IDEm']?></th>
                                                <th><a href="actualizar.php?id=<?php echo $row['IDEm'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['IDEm'] ?>" class="btn btn-danger">Eliminar</a></th>
                                            </tr>
                                        <?php
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>    
            </div>  
    </body>  
</html>  