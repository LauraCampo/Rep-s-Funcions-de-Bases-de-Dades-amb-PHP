<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Repaso</title>
    </head>
    <body>
        <h1>Creación de la tabla Ciudades</h1>
        <?php
        $conexion= mysqli_connect("localhost:3306","root","","Recursos");
        //Creamos la orden SQL para crear la tabla Ciudades
         $sel = "CREATE TABLE Ciudades ";
         $sel.= "(Nombre CHAR(20), "; //almacenaremos un nombre de hasta 20 caracteres
         $sel.= "Pais CHAR(20), "; //almacenaremos un nombre de hasta 20 caracteres
         $sel.= "Idioma CHAR(30), "; //almacenaremos un nombre de hasta 30 caracteres
         $sel.= "Habitantes CHAR(12))"; //almacenaremos un monbre de hasta 12 caracteres
        
        //Ejecutamos la orden SQL en la base de datos
        $exec=  mysqli_query($conexion, $sel);
        //y por último cerramos la base de datos
        mysqli_close($conexion);
        ?>
    </body>
</html>




