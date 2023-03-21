<?php 
    $id=$_GET['id'];
    include "config/bd.php";
    $datos=ListarunAlumno($id);
    $nombre_comun=$datos['nombre_comun'];
    $nombre_cientifico=$datos['nombre_cientifico'];
    $descripcion=$datos['descripcion'];
    $foto=$datos['foto'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="bg-light w-50 m-auto p-3">
            <div class="bg-primary p-2">
                <a class="btn btn-warning btn-sm" href="index.php">Inicio</a>
                <a class="btn btn-secondary btn-sm" href="editar.php?id=<?php echo $id ?>">Editar</a>
                <a class="btn btn-danger btn-sm" href="acciones/eliminar.php?id=<?php echo $id ?>">Eliminar</a>
            </div>
            <h3 class="text-center"><?=$nombre_comun?></h3>
            <p><strong>Correo : </strong> <?=$descripcion?></p>
            <center><img src="data:image/jpg;base64,<?=base64_encode($foto)?>"></center>
        </div>
    </div>
</body>
</html>