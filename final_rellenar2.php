<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Repaso</title>
    </head>
    <body>
<?php
    $conexion= mysqli_connect("localhost:3306","root","","Recursos");
    $sel = "INSERT INTO Ciudades VALUES ('";
    $sel.= $_POST["nombre"] . "','";
    $sel.= $_POST["pais"] . "','";
    $sel.= $_POST["idioma"] . "','";
    $sel.= $_POST["habitantes"] . "')";
    $exec=  mysqli_query($conexion, $sel);
    if($exec) {
        echo("<h1>Datos guardados</h1>");
        echo("<form action='final_rellenar1.php' method='post'>");
        echo("<input type='submit' name='continuar' value='Continuar'>");
    }
    else {
        echo("<h1>Se ha producido un error</h1>");
    }
?>
      </form>
    </body>
</html>