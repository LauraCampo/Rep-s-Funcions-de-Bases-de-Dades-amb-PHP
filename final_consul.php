<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Repaso</title>
    </head>
    <body>
<?php
    $conexion= mysqli_connect("localhost:3306","root","","Recursos");
    $sel = "SELECT * FROM Ciudades";
    //Ejecutamos la sentencia SQL
    $exec=  mysqli_query($conexion, $sel);
    ?>
        <table border="2">
            <tr>
                <th>Nombre</th>
                <th>Pais</th>
                <th>Idioma</th>
                <th>Habitantes</th>
            </tr>
<?php
    while ($registro=  mysqli_fetch_array($exec)){

?>
            <tr>
                <td><?php echo($registro["Nombre"]); ?></td>
                <td><?php echo($registro["Pais"]); ?></td>
                <td><?php echo($registro["Idioma"]); ?></td>
                <td><?php echo($registro["Habitantes"]); ?></td>
            </tr>
<?php
    }
?>
        </table>
    </body>
</html>

