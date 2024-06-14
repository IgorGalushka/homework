<?php
/*
 * Дан массив. Найдите два соседних элемента, сумма которых минимальна.
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
function solveTask6(): void {
    $array = generateArray(20);
    // Инициализируем минимальную сумму первыми двумя элементами
    $minSum = $array[0] + $array[1];
    $index1 = 0;
    $index2 = 1;
    // Находим два соседних элемента с минимальной суммой
    for ($i = 1; $i < count($array) - 1; $i++) {
        $sum = $array[$i] + $array[$i + 1];
        if ($sum < $minSum) {
            $minSum = $sum;
            $index1 = $i;
            $index2 = $i + 1;
        }
    }
    // Выводим результат
    print_r($array);
    echo "<br> Два соседних элемента с минимальной суммой: " . $index1 . " и " . $index2 . "<br>";
    echo "Их сумма: " . $minSum;
}

solveTask6();