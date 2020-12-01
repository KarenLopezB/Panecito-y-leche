<html> 
<head>
<title>INGRESAR LIBROS</title>
</head>

<body  background="fondo.jpg", style="font-family: Arial; margin:170px; margin-left: 590px;">
<header><h2>Ingresar los datos </h2></header>
    <form action="administrar_proyecto.php" method="post" > 
        <table>
            <tr>
                <td>Nombre de proyecto</td>
                <td><input type="text" name="nombreproyecto"></td>
            </tr>

            <tr>
                <td>Descripcion</td>
                <td><input type="text" name="descripcion"></td>
            </tr>

            <tr>
                <td>Fecha de inicio</td>
                <td><input type="text" name="fechainicio"></td>

            </tr>

            <tr>
                <td>Status actual del proyecto</td>
                <td><input type="text" name="statusactual"></td>
            </tr>

            <tr>
                <td>Codigo personal del dueño</td>
                <td><input type="text" name="codigonombre"></td>
            </tr>

            <tr>
                <td>Codigo personal del innovador</td>
                <td><input type="text" name="codigoinnovador"></td>
            </tr>

            
            
            <input type="hidden" name="insertar" value="insertar">

        </table>
        <input type="submit" value="Guardar">
        <a href="index.php">Volver</a>
    </form>
</body>
</html>