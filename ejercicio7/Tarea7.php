<!-- Crear un formulario que lea los datos del cumpleaños de una persona, con un campo nombre, otro fecha , 
    otro de hora (utilizando los campos de html5) y un botón. Investigar las funciones de fecha de la siguiente 
    https://www.mclibre.org/consultar/php/lecciones/php-fecha-hora.html .
    Crea una función que reciba la fecha y la hora como dos parametros string y devuelva un mensaje con el siguiente formato:
    “Bienvenido [nombre], estás en [primavera/otoño/verano/invierno] quedan xx días para las vacaciones de navidad y 
    xxx dias xxx horas para vacaciones de semana santa [del año que viene]. Tu cumpleaños [no] cae en fin de semana y es el día 
    [jueves, 3 de octubre del 22]” 
    Siendo la fecha que se introduce en el formulario el cumpleaños del usuario.-->
<?php
$nombre = $_POST["nombre"];
$fecha = $_POST["fecha"];
$hora = $_POST["hora"];

function principal($nombre, $fecha, $hora)
{
    date_default_timezone_set("Europe/Madrid");

    $estacion = "";
    $fechaNavidad = new DateTime("2023-12-23");
    $fechaSemanaSanta = new DateTime("2024-03-24");
    $fechaActual = new DateTime("now");
    $vacacionesNavidad = date_diff($fechaActual, $fechaNavidad);
    $vacacionesSemanaSanta = date_diff($fechaActual, $fechaSemanaSanta);
    $esFinSemana = "no";

    //Comprobamos en que estación estamos
    if (date("n") == 3 || date("n") == 4 || date("n") == 5) {
        $estacion = "primavera";
    } elseif (date("n") == 6 || date("n") == 7 || date("n") == 8) {
        $estacion = "verano";
    } elseif (date("n") == 9 || date("n") == 10 || date("n") == 11) {
        $estacion = "otoño";
    } else {
        $estacion = "invierno";
    }

    $fechaSeparada = explode("-", $fecha);
    $ano = $fechaSeparada[0];

    echo $fecha;
    print(localtime($fecha, true)["tm_wday"]);

    //Comprobamos si el cumpleaños cae en fin de semana
    if ($fecha) {
        echo "1";
    } else {
        echo "2";
    }

    print "Bienvenido " . $nombre . " estas en " . $estacion . " quedan " . $vacacionesNavidad->format('%R%a') . " días para las vacaciones de navidad "
        . $vacacionesSemanaSanta->format('%R%a') . " días para las vacaciones de Semana Santa ";
}

principal($nombre, $fecha, $hora);

?>