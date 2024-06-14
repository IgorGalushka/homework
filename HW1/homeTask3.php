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


function solveTask3($n): int
    //Найдите сумму нечетных чисел массива, которые не превосходят 11.
{
    $sum = 0;
    $array = generateArray($n);
    print_r($array);  // Используем print_r для вывода массива

    foreach ($array as $value) {
        if ($value <= 11 && $value % 2 != 0) {
            $sum += $value;
        }
    }
    return $sum;
}

$result = solveTask3(6);
echo "Сумма нечетных чисел, не превосходящих 11: " . $result;
