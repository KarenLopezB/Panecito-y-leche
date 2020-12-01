<html>
    <head>
    <title></title>
    </head>
    <body>
        <header><h1>Ingresar datos de la cita</h1></header>
        <form action="administrar_cita.php" method="post">
            <table>
                <tr>
                    <td>Nombre</td>
                    <td><input type="text" name="nombre"></td>
                </tr>
                <tr>
                    <td>Apellidos</td>
                    <td><input type="text" name="apellidos"></td>
                </tr>
                <tr>
                    <td>Proyecto</td>
                    <td><input type="text" name="proyecto"></td>
                </tr>
                <tr>
                    <td>Empresa</td>
                    <td><input type="text" name="empresa"></td>
                </tr>
                <tr>
                    <td>Sinopsis</td>
                    <td><input type="text" name="sinopsis"></td>
                </tr>
                <tr>
                    <td>Fecha</td>
                    <td><input type="text" name="fecha"></td>
                </tr>
                <input type="hidden" name="insertar" value="insertar">
            </table>
            <input type="submit" value="Guardar">
            <a href="index.php">Volver</a>
        </form>
    </body>
</html>
