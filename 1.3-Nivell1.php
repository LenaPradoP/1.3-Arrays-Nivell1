<?php 
declare(strict_types = 1);

echo "<h1><u> Ejercicio 1 </u></h1>";
    $numeros = [2, 7, 12, 43, 29];

for ($i = 0; $i <= count($numeros); $i++) {
    echo "$numeros[$i] <br>";
}

echo "<h1><u> Ejercicio 2 </u></h1>";
    $X = array (10, 20, 30, 40, 50, 60);

echo count($X) . "<br>";

unset($X [4]);

$X = array_values($X);

echo count($X) . "<br>";

echo "<h1><u> Ejercicio 3 </u></h1>";
    $palabras = ["casa", "sol", "cose"];
    $caracter = "o";

echo buscarCaracter($palabras, $caracter);

function buscarCaracter(array $palabras, string $caracter) : bool {
    $contieneCaracter = false;

    foreach ($palabras as $palabra) {
        if (strpos($palabra, $caracter)){
            $contieneCaracter = true;
        } else {
            $contieneCaracter = false;
        }
    }

    return $contieneCaracter;
}

?>