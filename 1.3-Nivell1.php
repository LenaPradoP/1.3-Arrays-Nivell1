<?php 


echo "<h1><u> Ejercicio 1 </u></h1>";
$numeros = [2, 7, 12, 43, 29];

for ($i = 0; $i <= count($numeros); $i++) {
    echo "$numeros[$i] <br>";
}

echo "<h1><u> Ejercicio 2 </u></h1>";
    $X = array (10, 20, 30, 40, 50, 60);

/*Mostrar per pantalla la mida de l’array anterior i posteriorment elimina un element de l’array anterior.
Després d'eliminar l'element, les claus senceres han de ser normalitzades(s’han de reorganitzar els seus índexs).
Mostra per última vegada la mida de l’array.*/

echo count($X) . "<br>";

echo var_dump($X) . "<br>";

unset($X [4]);

echo var_dump($X) . "<br>";

echo count($X) . "<br>";


?>