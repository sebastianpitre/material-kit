<?php
include("conexion.php");
$con=conectar();

$id_ave=$_POST['id_ave'];
$fotografia=$_POST['fotografia'];
$nombre_comun=$_POST['nombre_comun'];
$nombre_cientifico=$_POST['nombre_cientifico'];


$sql="INSERT INTO alumno VALUES('$id_ave','$fotografia','$nombre_comun','$nombre_cientifico')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: alumno.php");
    
}else {
}
?>