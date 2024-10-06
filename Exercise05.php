<?php
$suma = 0;
$contadorPositivo = 0;
$contadorNegativo = 0;

do {
    $randNumEj5 = rand(0, 20);
    $suma += $randNumEj5;

    if ($randNumEj5 >= 0) {
        $contadorPositivo++;
    } else {
        $contadorNegativo++;
    }
} while ($suma <= 100);

echo "Suma total: $suma\n";
echo "Positivos: $contadorPositivo\n";
echo "Negativos: $contadorNegativo\n";
?>
