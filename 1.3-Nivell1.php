<?php 
declare(strict_types = 1);

echo "<h1><u> Ejercicio 1 </u></h1>";
    $numeros = array(2, 7, 12, 43, 29);

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
    $palabras = array("casa", "sol", "cose");
    $caracter = "s";

    if (buscarCaracter($palabras, $caracter) == true) {
        echo "Todas las palabras contienen $caracter.";
    } else {
        echo "No todas las palabras contienen $caracter.";
    }

function buscarCaracter(array $palabras, string $caracter) : bool {
    $contieneCaracter = true;

    foreach ($palabras as $palabra) {
        if (strpos($palabra, $caracter)  === false) {
            $contieneCaracter = false;
            break;
        } 
    }

    return $contieneCaracter;
}

echo "<h1><u> Ejercicio 4 </u></h1>";
    $misDatos = array("Nombre" => "Lena", 
    "Edad" => 43, 
    "Email" => "lena@atajo.es", 
    "Comida Favorita" => "comida india.");

    foreach ($misDatos as $campo => $dato) {
        echo "$campo: $dato <br>";
    }

?>