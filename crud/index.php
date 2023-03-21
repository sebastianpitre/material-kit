<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud jvh</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row p-2">
            <div class="col-3">
                <form action="acciones/insertar.php" method="POST" enctype="multipart/form-data">
                    <h3 class="text-center">REGISTRA UN ALUMNO</h3>
                    <label>nombre común</label>
                    <input class='form-control' type="text" name="nombre_comun" >
                    <label>nombre científico</label>
                    <input class='form-control' type="text" name="nombre_cientifico" >
                    <label>descripción</label>
                    <input class='form-control' type="descripcion" name="descripcion" >
                    <label>Foto del alumno</label>
                    <input class='form-control' type="file" name="foto" >
                    <button class="btn btn-primary mt-2" type="submit">Registrar</button>
                </form>
            </div>
            <div class="col-9">
                Lista de alumnos
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Foto</th>
                            <th>nombre común</th>
                            <th>nombre científico</th>
                            <th>descripción</th>
                            
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            include "config/bd.php";
                            $query=listar();
                            $enumeracion=0;
                            while($datos=mysqli_fetch_assoc($query)){
                                $enumeracion++;
                                $id=$datos['id'];
                                $foto=$datos['foto'];
                                $nombre_comun=$datos['nombre_comun'];
                                $nombre_cientifico=$datos['nombre_cientifico'];
                                $correo=$datos['descripcion'];
                                
                            
                        ?>
                        <tr>
                            <td><?= $enumeracion?></td>
                            <td><img style="max-height:50px;" src="data:image/jpg;base64,<?= base64_encode($foto)?>"></td>
                            <td><?= $nombre_comun?></td>
                            <td><?= $nombre_cientifico?></td>
                            <td><?= $correo?></td>
                            <td>
                                <a class="btn btn-info" href="ver.php?id=<?=$id?>">Ver</a>
                                <a class="btn btn-warning" href="editar.php?id=<?=$id?>">Actualizar</a>
                                <a class="btn btn-danger" href="acciones/eliminar.php?id=<?=$id?>">Eliminar</a>
                            </td>
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