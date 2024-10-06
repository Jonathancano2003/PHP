<?php
$num1 = 5;
$num2 = 3;

$suma = $num1 + $num2;
$resta = $num1 - $num2;
$division = $num1 / $num2;

echo "Valores: num1 = $num1, num2 = $num2\n";
echo "Suma: $suma\n";
echo "Resta: $resta\n";
echo "División: $division\n";

if ($num1 > $num2) {
    echo "$num1 es mayor que $num2\n";
} elseif ($num1 < $num2) {
    echo "$num1 es menor que $num2\n";
} else {
    echo "$num1 y $num2 son iguales\n";
}

if ($num1 > 1 && $num2 > 1) {
    $area = ($num1 * $num2) / 2;
    echo "Área del triángulo: $area\n";
}
?>