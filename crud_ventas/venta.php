<?php
    include("conexion.php");
    $con=conectar();

    $sql="SELECT * FROM ventas";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PaginaVenta</title>
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

                                    <input type="text" class="form-control mb-3" name="IDV" placeholder="ID de venta">
                                    <input type="text" class="form-control mb-3" name="IDUs" placeholder="ID de usuario">
                                    <input type="text" class="form-control mb-3" name="IdSuc" placeholder="ID de sucursal">
                                    <input type="text" class="form-control mb-3" name="IDEm" placeholder="ID de empleado">
                                    <input type="text" class="form-control mb-3" name="GasLit" placeholder="Litros de gas vendido">
                                    <input type="text" class="form-control mb-3" name="Costo" placeholder="Costo total">
                                    <input type="text" class="form-control mb-3" name="Fecha" placeholder="Fecha de venta">
                                    <input type="text" class="form-control mb-3" name="Hora" placeholder="Hora">

                                    <input type="submit" class="btn btn-primary">
                                </form>     
                        </div>
                        <div class="col-md-8">
                            <table class="table">
                                <thead class="table-sucess table-striped">
                                    <tr>
                                        <th>ID venta</th>
                                        <th>ID usuario</th>
                                        <th>ID sucursal</th>
                                        <th>ID empleado</th>
                                        <th>Litros de gas</th>
                                        <th>Costo total</th>
                                        <th>Fecha</th>
                                        <th>Hora</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php echo $row['IDV']?></th>
                                                <th><?php echo $row['IDUs']?></th>
                                                <th><?php echo $row['IdSuc']?></th>
                                                <th><?php echo $row['IDEm']?></th>
                                                <th><?php echo $row['GasLit']?></th>
                                                <th><?php echo $row['Costo']?></th>
                                                <th><?php echo $row['Fecha']?></th>
                                                <th><?php echo $row['Hora']?></th>
                                                <th><a href="actualizar.php?id=<?php echo $row['IDV'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['IDV'] ?>" class="btn btn-danger">Eliminar</a></th>
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