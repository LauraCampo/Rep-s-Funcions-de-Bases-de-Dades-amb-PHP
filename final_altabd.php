<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Repaso</title>
    </head>
    <body>
        <h1>Creación de la base de datos Recursos</h1>
        <?php
        //creamos el objeto conexión, indicando el puerto, nombre de usuario, password
        $conexion= mysqli_connect("localhost:3306","root","");
        echo("Creando base de datos....");
        $ordensql = "CREATE DATABASE Recursos";
        $exec = mysqli_query($conexion, $ordensql);
        if($exec){
            echo("Base de datos creada!!");
        }
        ?>
    </body>
</html>



