<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Eliminación de una tabla en una base de datos</title>
    </head>
    <body>
<?php
    $conexion= mysqli_connect("localhost:3306","root","","Recursos");
    echo("Eliminando la tabla Ciudades....");
    $ordensql="DROP TABLE Ciudades";
    $exec=  mysqli_query($conexion, $ordensql);
    if($exec){
       echo ("Tabla eliminada!"); 
    }
        
?>
    </body>
</html>

