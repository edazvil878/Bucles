<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Tarea 4</title>
</head>

<body>
    <!-- Realizar un formulario en php que lea un nombre completo de una persona y se llame a sí mismo, 
    debajo del formulario deberá sacar la cantidad de consonantes que tiene la cadena en cada palabra, 
    así cómo el número de letras. Realizar dos versiones, una utilizando funciones de cadena y otra sin utilizarlas. 
    Puede existir más de un espacio entre palabras, y al principio y final de la cadena.(Investigar trim r y ltrim).
    Ejemplo de entrada: Victor Pablo Galvan Florez
    salida: Palabra1:4 Consonantes 6 letras, palabra2:3 Consonantes 5 letras, … -->

    <!-- Creamos el formulario -->
    <form method="post" action="">
        <label for="nombre">Ingrese un nombre completo:</label>
        <input type="text" name="nombre" required>
        <br>
        <input type="submit" value="Enviar">
    </form>


    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombreCompleto = $_POST["nombre"];
        $palabras = explode(" ", trim($nombreCompleto));

        foreach ($palabras as $indice => $palabra) {
            $consonantes = 0;
            $letras = 0;

            for ($i = 0; $i < strlen($palabra); $i++) {
                $letra = strtolower($palabra[$i]);
                if (ctype_alpha($letra)) {
                    $letras++;
                    if (!in_array($letra, array("a", "e", "i", "o", "u"))) {
                        $consonantes++;
                    }
                }
            }

            echo "Palabra" . ($indice + 1) . ": $consonantes Consonantes $letras letras<br>";
        }
    }
    ?>

    <hr>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombreCompleto = $_POST["nombre"];
        $palabras = explode(" ", trim($nombreCompleto));

        foreach ($palabras as $indice => $palabra) {
            $consonantes = contarConsonantes($palabra);
            $letras = strlen($palabra);

            echo "Palabra" . ($indice + 1) . ": $consonantes Consonantes $letras letras<br>";
        }
    }

    function contarConsonantes($palabra)
    {
        $consonantes = 0;
        $vocales = array("a", "e", "i", "o", "u");

        for ($i = 0; $i < strlen($palabra); $i++) {
            $letra = strtolower($palabra[$i]);
            if (!in_array($letra, $vocales) && ctype_alpha($letra)) {
                $consonantes++;
            }
        }

        return $consonantes;
    }
    ?>

</body>

</html>