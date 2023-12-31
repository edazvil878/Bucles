<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Tarea 6</title>
</head>

<body>
    <!-- Realizar un programa que lea de un formulario los datos de las columnas, filas, color de fondo, de letra para una tabla. 
    Tambien tres checkbox, edad, sexo y observaciones. 
    
    Debe llamar a una página php que construya una tabla con esas características. 

    Si esta marcado edad se creara además de la tabla un select de selección de edad de 1 a 120 generado en php, 
    si se marca sexo un radio con las dos opciones y si se marca Observaciones un campo de texto amplio de observaciones.
    Para hacer el contenido, se utilizarán funciones, 

    crearTabla(color,columnas,filas), 
    crearSexo(), 
    crearObservaciones(ancho, filas).

    Para el ancho y filas de las observaciones se puede utilizar el de la tabla o nuevos campos select. Por defecto para el textarea de observaciones, 
    los campos tendrán unos valores predefinidos de 10x10 si no se meten valores.
    Las funciones deberán estar en un fichero denominado funciones-html.php y deberá incluirse en la pagina web que cree la página final.   
    No se podrá utilizar la etiqueta style ni css dentro del propio fichero.-->

    <?php

    $columna = $_POST["columnas"];
    $fila = $_POST["filas"];
    $colorFondo = $_POST["color-fondo"];
    $colorLetra = $_POST["color-letra"];
    $edad = $_POST["edad"];
    $sexo = $_POST["sexo"];
    $observaciones = $_POST["observaciones"];

    include('funciones-html.php');

    crearTabla($colorFondo, $colorLetra, $columna, $fila);

    if ($sexo) {
        crearSexo();
    }

    ?>
</body>

</html>