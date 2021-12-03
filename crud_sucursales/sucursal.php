<?php
    include("conexion.php");
    $con=conectar();

    $sql="SELECT * FROM sucursales";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PaginaSucursal</title>
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

                                    <input type="text" class="form-control mb-3" name="IdSuc" placeholder="ID">
                                    <input type="text" class="form-control mb-3" name="NomSuc" placeholder="Nombre sucursal">
                                    <input type="text" class="form-control mb-3" name="NomCal" placeholder="Nombre calle">
                                    <input type="text" class="form-control mb-3" name="NomCol" placeholder="Nombre colonia">
                                    <input type="text" class="form-control mb-3" name="CodPos" placeholder="Codigo postal">
                                    <input type="text" class="form-control mb-3" name="EntFed" placeholder="Entidad federativa">

                                    <input type="submit" class="btn btn-primary">
                                </form>     
                        </div>
                        <div class="col-md-8">
                            <table class="table">
                                <thead class="table-sucess table-striped">
                                    <tr>
                                        <th>ID</th>
                                        <th>Sucursal</th>
                                        <th>Calle</th>
                                        <th>Colonia</th>
                                        <th>Codigo postal</th>
                                        <th>Entidad federativa</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php echo $row['IdSuc']?></th>
                                                <th><?php echo $row['NomSuc']?></th>
                                                <th><?php echo $row['NomCal']?></th>
                                                <th><?php echo $row['NomCol']?></th>
                                                <th><?php echo $row['CodPos']?></th>
                                                <th><?php echo $row['EntFed']?></th>
                                                <th><a href="actualizar.php?id=<?php echo $row['IdSuc'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['IdSuc'] ?>" class="btn btn-danger">Eliminar</a></th>
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