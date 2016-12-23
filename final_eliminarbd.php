<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Eliminación de una base de datos</title>
    </head>
    <body>
<?php
    $conexion= mysqli_connect("localhost:3306","root","","Recursos");
    echo("Eliminando la base de datos Recursos....");
    $ordensql="DROP DATABASE Recursos";
    $exec=  mysqli_query($conexion, $ordensql);
    if($exec){
       echo ("Base de datos eliminada!"); 
    }
        
?>
    </body>
</html>

