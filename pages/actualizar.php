<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM alumno WHERE id_ave='$id'";
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
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="id_ave" value="<?php echo $row['id_ave']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="fotografia" placeholder="fotografia" value="<?php echo $row['fotografia']  ?>">
                                <input type="text" class="form-control mb-3" name="nombre_comun" placeholder="nombre_comun" value="<?php echo $row['nombre_comun']  ?>">
                                <input type="text" class="form-control mb-3" name="nombre_cientifico" placeholder="nombre_cientifico" value="<?php echo $row['nombre_cientifico']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>