<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM alumno";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabla</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<link rel="stylesheet" href="tabla.css">

<table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    while($row=mysqli_fetch_array($query)){
                ?>
                    <tr>
                        <td><?php  echo $row['id_ave']?></td>
                        <td><?php  echo $row['fotografia']?></td>
                        <td><?php  echo $row['nombre_comun']?></td>
                        <td><?php  echo $row['nombre_cientifico']?></td>
                        <td><a href="actualizar.php?id=<?php echo $row['id_ave'] ?>" class="btn btn-info">Editar</a></td>
                        <td><a href="delete.php?id=<?php echo $row['id_ave'] ?>" class="btn btn-danger">Eliminar</a></td>                                        
                    </tr>
                <?php 
                    }
                ?>
                </tbody>
</table>  


<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="tabla.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.6/js/dataTables.fixedHeader.min.js"></script> 

<script>
let temp = $("#btn1").clone();
$("#btn1").click(function(){
    $("#btn1").after(temp);
});

$(document).ready(function(){
    var table = $('#example').DataTable({
    orderCellsTop: true,
    fixedHeader: true 
    });

    //Creamos una fila en el head de la tabla y lo clonamos para cada columna
    $('#example thead tr').clone(true).appendTo( '#example thead' );

    $('#example thead tr:eq(1) th').each( function (i) {
        var title = $(this).text(); //es el nombre de la columna
        $(this).html( '<input type="text" placeholder="Filtrar por '+title+'" />' );

        $( 'input', this ).on( 'keyup change', function () {
            if ( table.column(i).search() !== this.value ) {
                table
                    .column(i)
                    .search( this.value )
                    .draw();
            }
        } );
    } );   
});
</script>


</body>
</html>