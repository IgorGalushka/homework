<?php
/*
 * Найдите сумму наибольшего и наименьшего элементов массива.
 */
function generateArray($n)
    //Функция генерирует массив случайных чисел от 0 до 20
{
    $a = [];

    for ($i=0; $i<$n; $i++){
        $a[] = mt_rand(0, 20);
    }
    return $a;
}


function solveTask5(): int
{
    $min_value = 0;
    $max_value = 0;
    $array = generateArray(10);
    print_r($array);
    for ($i=0; $i<count($array); $i++){
        if ($array[$i] > $max_value){
            $max_value = $array[$i];
        }elseif ($array[$i] < $min_value){
            $min_value = $array[$i];
        }
    }
    $result = $min_value + $max_value;
    echo ("<br>Минимальное значение из массива: "). $min_value;
    echo ("<br>Максимальное значение из массива: "). $max_value;
    return $result;
}

$sumArray = solveTask5();
echo ("<br>Максимальное значение из массива: "). $sumArray;



