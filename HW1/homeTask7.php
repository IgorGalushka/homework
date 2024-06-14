<?php
function generateArray($n = 20)
    //Функция генерирует массив случайных чисел от 0 до 20
{
    $a = [];

    for ($i=0; $i<$n; $i++){
        $a[] = mt_rand(0, 20);
    }
    print_r($a);
    return $a;
}

function solveTask7(): array
    //Функция находит в массиве два наименьших элемента.
{
    $array = generateArray();
    if ($array[0] > $array[1]) {
        $minValue1 = $array[1];
        $minValue2 = $array[0];
    } else {
        $minValue1 = $array[0];
        $minValue2 = $array[1];
    }

    for ($i=2; $i<count($array); $i++) {
        if ($array[$i] < $minValue1) {
            $minValue2 = $minValue1;
            $minValue1 = $array[$i];
        }
        elseif ($array[$i] < $minValue2){
            $minValue2 = $array[$i];
        }
    }
    echo '<br> Первый минимальный элемент: ' . $minValue1;
    echo '<br> Второй минимальный элемент: ' . $minValue2;

    return [$minValue1, $minValue2];

}
solveTask7();