<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Repaso</title>
    </head>
    <body>
        <h1>Ficha Alta Nuevas Ciudades</h1>
        <form action="final_rellenar2.php" method="post">
            <table>
                <tr>
                    <td>Nombre</td>
                    <td>
                        <input type="text" size="20" name="nombre">
                    </td>
                </tr>
                <tr>
                    <td>Pais</td>
                    <td>
                        <input type="text" size="20" name="pais">
                    </td>
                </tr>
                <tr>
                    <td>Idioma</td>
                    <td>
                        <input type="text" size="30" name="idioma">
                    </td>
                </tr>
                <tr>
                    <td>Habitantes</td>
                    <td>
                        <input type="text" size="12" name="habitantes">
                    </td>
                </tr>
                    <td colspan="2">
                        <input type="submit" name="alta" value="Realizar alta">
                        <input type="reset" name="reset" value="Restablecer">
                    </td>
                </tr>
            </table>    
        </form>
    </body>
</html>

