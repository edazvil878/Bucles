<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario tarea 8</title>
</head>

<body>
    <!-- Crear un formulario que tenga un campo de texto. En el irán codificados los menús superiores e inferiores de la web. Dependiendo de los valores,
    en la página destino aparecerá un menú superior y otro inferior con dichas opciones. El menú deberá tener una apariencia aceptable con estilo bootstrap 
    última versión.
    Ejemplo de codificación 
    S3-BUSCAR-AZUL-http://www.google.es  
    [S-Menu superior/I-Menu inferior][orden del menu]-[nombre menu]-[Color Letra]-[url destino]
    También tendrá un grid de checkbox de 4x4, a partir de la máxima anchura y altura en la que haya un checkbox marcado, 
    creará una tabla en el html final con esa altura y anchura, con el fondo de color distinto en las posiciones con checkbox marcados. 
    El grid de checkbox se deberá generar con php dinamicamente.-->

    <form method="post" action="Tarea8.php">
        <label for="menu">Menus codificados:</label>
        <br>
        <textarea name="menu" id="menu" cols="30" rows="1"></textarea>
    </form>

</body>

</html>