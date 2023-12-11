<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Tarea 5</title>
</head>

<body>
    <!-- Realizar un programa que lea de un formulario una serie de números de cualquier longitud en un campo único de texto, 
    separados por espacios. El programa debe tener una función que reciba el texto y debe de devolver un array asociativo con las claves 
    “nprimos”, “media” y “mínimo” asociados a los valores respectivos. La función tendrá un segundo parámetro opcional denominado $orden, 
    si es cierto el array resultante primero devolverá “nprimos”, “media” y “mínimo”, si es falso será el orden contrario, 
    si no se introduce el valor de $orden, por defecto será cierto. Deberá mostrarlos en una tabla, con labels que pongan las claves y sus respectivos valores. 
    Realizar 2 versiones de la función, en uno utilizando funciones para realizar el cálculo (explode, max, min) y otro sin utilizar ninguna función.
    Deberá mostrarlos en una tabla, con labels que pongan las claves y sus respectivos valores. Realizar 2 versiones de la función,
    en uno utilizando funciones para realizar el cálculo (explode, max, min) y otro sin utilizar ninguna función.-->

    <form action="Tarea5.php" method="post">
        <label for="numeros">Introduce numeros separados por espacios</label>
        <br>
        <textarea name="numeros" cols="30" rows="1" placeholder="numeros..."></textarea>
        <input type="submit" value="Enviar">
    </form>

</body>

</html>