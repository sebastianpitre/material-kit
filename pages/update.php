<?php

include("conexion.php");
$con=conectar();

$id_ave=$_POST['id_ave'];
$fotografia=$_POST['fotografia'];
$nombre_comun=$_POST['nombre_comun'];
$nombre_cientifico=$_POST['nombre_cientifico'];

$sql="UPDATE alumno SET  fotografia='$fotografia',nombre_comun='$nombre_comun',nombre_cientifico='$nombre_cientifico' WHERE id_ave='$id_ave'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: especies.php");
    }
?>