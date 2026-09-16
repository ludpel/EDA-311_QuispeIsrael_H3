<?php

$numeros = [5, 2, 8, 1, 4];

echo "Arreglo inicial: ";
print_r($numeros);

$n = count($numeros);

for ($i = 0; $i < $n - 1; $i++) {

    echo "\nVuelta " . ($i + 1) . ":\n";

    for ($j = 0; $j < $n - $i - 1; $j++) {

        echo "Comparando ";
        echo $numeros[$j] . " y " . $numeros[$j + 1] . "\n";

        if ($numeros[$j] > $numeros[$j + 1]) {

            $temporal = $numeros[$j];

            $numeros[$j] = $numeros[$j + 1];

            $numeros[$j + 1] = $temporal;

            echo "Intercambio: ";
            print_r($numeros);
        }
    }
}

echo "\nArreglo ordenado: ";
print_r($numeros);

?>
