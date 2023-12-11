<?php
function crearTabla($colorFondo, $colorLetra, $columnas, $filas)
{
    echo "<table  class=" . $colorFondo . " class=" . $colorLetra . ">";
    for ($i = 0; $i < $filas; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $columnas; $j++) {
            echo "<td>hola</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

function crearSexo()
{
    echo "<form>";
    echo "<input type='radio' id='hombre' name='sexo' value='hombre'>";
    echo "<label for='hombre'>Hombre</label><br>";
    echo "<input type='radio' id='mujer' name='sexo' value='mujer'>";
    echo "<label for='mujer'>Mujer</label><br>";
    echo "</form>";
}
?>