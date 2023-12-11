<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Tarea 6</title>
</head>

<body>
    <!-- Realizar un programa que lea de un formulario los datos de las columnas, filas, color de fondo, de letra para una tabla. 
    Tambien tres checkbox, edad, sexo y observaciones. Debe llamar a una página php que construya una tabla con esas características. 
    Si esta marcado edad se creara además de la tabla un select de selección de edad de 1 a 120 generado en php, 
    si se marca sexo un radio con las dos opciones y si se marca Observaciones un campo de texto amplio de observaciones.
    Para hacer el contenido, se utilizarán funciones, crearTabla(color,columnas,filas), crearSexo(), crearObservaciones(ancho, filas). 
    Para el ancho y filas de las observaciones se puede utilizar el de la tabla o nuevos campos select. Por defecto para el textarea de observaciones, 
    los campos tendrán unos valores predefinidos de 10x10 si no se meten valores.
    Las funciones deberán estar en un fichero denominado funciones-html.php y deberá incluirse en la pagina web que cree la página final.   
    No se podrá utilizar la etiqueta style ni css dentro del propio fichero.-->

    <form action="Tarea6.php" method="post">
        <label for="columnas">Introduce las columnas</label>
        <br>
        <select name="columnas">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        <br><br>

        <label for="filas">Introduce las filas</label>
        <br>
        <select name="filas">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        <br><br>

        <label for="color-fondo">Selecciona el color de fondo</label>
        <br>
        <select name="color-fondo">
            <option value="rojo">Rojo</option>
            <option value="amarillo">Amarillo</option>
            <option value="azul">Azul</option>
            <option value="verde">Verde</option>
            <option value="rosa">Rosa</option>
            <option value="marron">Marrón</option>
            <option value="naranja">Naranja</option>
        </select>
        <br><br>

        <label for="color-letra">Selecciona el color de fondo</label>
        <br>
        <select name="color-letra">
            <option value="rojo">Rojo</option>
            <option value="amarillo">Amarillo</option>
            <option value="azul">Azul</option>
            <option value="verde">Verde</option>
            <option value="rosa">Rosa</option>
            <option value="marron">Marrón</option>
            <option value="naranja">Naranja</option>
        </select>
        <br><br>

        <label for="edad">Edad:</label>
        <input type="checkbox" name="edad">
        <br><br>

        <label for="sexo">Sexo:</label>
        <input type="checkbox" name="sexo">
        <br><br>

        <label for="observaciones">Observaciones:</label>
        <input type="checkbox" name="observaciones">
        <br><br>
        <input type="submit" value="Enviar">
    </form>

</body>

</html>