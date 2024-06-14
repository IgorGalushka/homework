<?php

function generateArray($n)
    //Функция генерирует массив случайных чисел от 0 до 20
{
    $a = [];

    for ($i=0; $i<$n; $i++){
        $a[] = mt_rand(0, 20);
    }
    return $a;
}

function solveTask4($n): int
{
    $sum = 0;
    $array = generateArray($n);
    echo "Сгенерированный массив: ";
    print_r($array);
    echo "<br>";

    for ($i = 0; $i < $n; $i++) {
        if ($i % 2 == 0) {
            echo $array[$i] . " ";
            $sum += $array[$i];
        }
    }

    return $sum;
}

$result = solveTask4(10);
echo "<br>Сумма чисел, которые стоят на четных местах: " . $result;
?>