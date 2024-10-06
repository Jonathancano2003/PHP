<?php

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

echo "numero 1 $num1 y numero 2 $num2\n";
do {
    $num1++;
    echo "$num1 ";
} while ($num1 < $num2);

?>