<html> 
<head>
<title>INGRESAR LIBROS</title>
</head>

<body  background="fondo.jpg", style="font-family: Arial; margin:170px; margin-left: 590px;">
<header><h2>Ingresar los datos </h2></header>
    <form action="administrar_registro.php" method="post" > 
        <table>
            <tr>
                <td>Nombre Libro</td>
                <td><input type="text" name="nombre"></td>
            </tr>

            <tr>
                <td>Autor</td>
                <td><input type="text" name="apellido"></td>

            </tr>

            <tr>
                <td>Fecha del registro</td>
                <td><input type="text" name="fecharegistro"></td>
            </tr>

            <tr>
                <td>Lugar de nacimiento</td>
                <td><input type="text" name="nacimiento"></td>
            </tr>

            <tr>
                <td>Lugar de nacimiento</td>
                <td><input type="text" name="edad"></td>
            </tr>
            
            <tr>
                <td>Lugar de nacimiento</td>
                <td><input type="text" name="areadesarrollo"></td>
            </tr>

            <tr>
                <td>Lugar de nacimiento</td>
                <td><input type="text" name="residencia"></td>
            </tr>

            <tr>
                <td>Lugar de nacimiento</td>
                <td><input type="text" name="nivelestudios"></td>
            </tr>

            <tr>
                <td>Lugar de nacimiento</td>
                <td><input type="text" name="codigopersonal"></td>
            </tr>

            <input type="hidden" name="insertar" value="insertar">

        </table>
        <input type="submit" value="Guardar">
        <a href="index.php">Volver</a>
    </form>
</body>
</html>