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


//2



$dia = 4;


switch ($dia) {
    case 1:
        echo "Lunes\n";
        break;
    case 2:
        echo "Martes\n";
        break;
    case 3:
        echo "Miércoles\n";
        break;
    case 4:
        echo "Jueves\n";
        break;
    case 5:
        echo "Viernes\n";
        break;
    case 6:
        echo "Sábado\n";
        break;
    case 7:
        echo "Domingo\n";
        break;
    default:
        echo "No corresponde a ningún día de la semana\n";
}








//3ç
$num1 = 10 + rand(1, 10);
$num2 = 10 + rand(1, 10);


function printPairs($num)
{
    for ($i = 0; $i < $num; $i++) {
        if ($i % 2 == 0) {
            echo " $i ";
        }
    }
}


function countDown($num)
{
    while ($num > 0) {
        $num--;

        echo "($num)";
    }
}


echo "numero 1 $num1 y numero 2$num2";
do {
    $num1++;
    echo "$num1 ";
} while ($num1 < $num2);


//ejercicio 4
$randNum = rand(1, 6);

$caraOpuesta = 7 - $randNum;


echo "EL DADO ES $randNum y la cara opuesta es $caraOpuesta";

//ejercicio 5

$randNumEj5;
echo "$randNumEj5";
$suma = 0;
$contadorPositivo = 0;
$contadorNegativo = 0;

do {
    # code...
    $randNumEj5 = rand(0, 20);
    $suma += $randNumEj5;

    if ($randNumEj5 % 0 == 0) {
        $contadorPositivo++;
    } else {
        $contadorNegativo++;
    }
} while ($uma <= 100);
