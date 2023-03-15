<?php

include("conexion.php");
$con=conectar();

$id_ave=$_GET['id'];

$sql="DELETE FROM alumno  WHERE id_ave='$id_ave'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>
