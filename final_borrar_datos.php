<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Eliminación de una base de datos</title>
    </head>
    <body>
<?php
   //Creamos el objeto conexión
    $conexion= mysqli_connect("localhost:3306","root","","Recursos");
    echo("Eliminando el contenido de la tabla Ciudades....");
    $ordensql="TRUNCATE TABLE Ciudades";
    $exec=  mysqli_query($conexion, $ordensql);
    if($exec){
       echo ("Datos de la tabla eliminados!"); 
    }
        
?>
    </body>
</html>

