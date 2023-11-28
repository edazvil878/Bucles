<!-- Realizar un programa que lea de un formulario una serie de números de cualquier longitud en un campo único de texto, 
    separados por espacios. 
    
    El programa debe tener una función que reciba el texto y debe de devolver un array asociativo con las claves 
    “nprimos”, “media” y “mínimo” asociados a los valores respectivos. 
    
    La función tendrá un segundo parámetro opcional denominado $orden, 
    si es cierto el array resultante primero devolverá “nprimos”, “media” y “mínimo”, si es falso será el orden contrario, 
    si no se introduce el valor de $orden, por defecto será cierto. 
    
    Deberá mostrarlos en una tabla, con labels que pongan las claves y sus respectivos valores. 

    Realizar 2 versiones de la función, en uno utilizando funciones para realizar el cálculo (explode, max, min) y otro sin utilizar ninguna función.-->

<?php

//Creamos la variable
$numero = $_POST["numeros"];
$numeros = explode(" ", $numero);

//Hacemos la función para comprobar si un numero es primo
function esPrimo($numero)
{
    $primo = true;
    for ($i = 2; $i < $numero; $i++) {
        if (($numero % $i) == 0) {
            $primo = false;
        }
    }
    return $primo;
}

//Hacemos la funció principal
function Comprobar($numeros, $orden = true)
{
    //Calculamos el total y la suma para hacer la media
    //Inicializamos los primos a 0
    $total_num = count($numeros);
    $suma = array_sum($numeros);
    $nprimos = 0;

    //Recorremos el array y si es primo lo sumamos
    foreach ($numeros as $numero) {
        if (esPrimo($numero)) {
            $nprimos++;
        }
    }
    //Añadimos el numero al array
    $array["nprimos"] = $nprimos;

    //Hacemos la media y la añadimos al array
    $media = $suma / $total_num;
    $array["media"] = round($media);


    //Comprobamos cual es el mínimo y lo añadimos al array
    $min = min($numeros);
    $array["mínimo"] = $min;

    // Verificamos el orden y reordenamos el array
    if (!$orden) {
        $array = array_reverse($array, true);
    }


    return $array;
}

$arrayFin = Comprobar($numeros, false);

?>

<!-- Creamos la tabla donde mostramos la clave y el valor -->
<table border="1px">
        <?php
        foreach ($arrayFin as $clave => $valor) {
            echo "<tr>";
            echo "<th>{$clave}</th>";
            echo "<td>{$valor}</td>";
            echo "</tr>";
        }
        ?>
</table>