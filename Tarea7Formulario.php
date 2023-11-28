<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Tarea 7</title>
</head>

<body>
    <!-- Crear un formulario que lea los datos del cumpleaños de una persona, con un campo nombre, otro fecha , 
    otro de hora (utilizando los campos de html5) y un botón. Investigar las funciones de fecha de la siguiente 
    https://www.mclibre.org/consultar/php/lecciones/php-fecha-hora.html .
    Crea una función que reciba la fecha y la hora como dos parametros string y devuelva un mensaje con el siguiente formato:
    “Bienvenido [nombre], estás en [primavera/otoño/verano/invierno] quedan xx días para las vacaciones de navidad y 
    xxx dias xxx horas para vacaciones de semana santa [del año que viene]. Tu cumpleaños [no] cae en fin de semana y es el día 
    [jueves, 3 de octubre del 22]” 
    Siendo la fecha que se introduce en el formulario el cumpleaños del usuario.-->

    <form method="post" action="Tarea7.php">
        <label for="nombre">Ingrese un nombre completo:</label>
        <input type="text" name="nombre" required>
        <br><br>
        <label for="fecha">Ingresa la fecha de nacimiento:</label>
        <input type="date" name="fecha" required>
        <br><br>
        <label for="hora">Ingresa la hora:</label>
        <input type="time" name="hora" required>
    </form>
</body>

</html>