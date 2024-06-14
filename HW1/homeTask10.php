<?php
//Найдите наибольший элемент матрицы и заменить все нечетные элементы на него.
function genMatrix(int $n = 5, int $m = 5): array {
    $a = [];
    for ($i = 0; $i < $n; $i++) {
        $row = [];
        for ($j = 0; $j < $m; $j++) {
            $row[] = mt_rand(0, 9);
        }
        $a[] = $row;
    }
    return $a;
}

// Выводит матрицу в виде таблицы
function showMatrix(array $a): void {
    foreach ($a as $row) {
        foreach ($row as $value) {
            echo $value . ' ';
        }
        echo '<br>';
    }
}

function findMaxMatrixValue(array $a): int
//Находит максимальный элемент матрицы
{
    $maxValue = $a[0][0];
    foreach ($a as $raw) {
        foreach ($raw as $value) {
            if ($minValue <= $value){
                $minValue = $value;
            }
        }

    }
    return $maxValue;
}

function changeOddMatrix(array $a, int $maxValue): array{
    foreach ($a as $row) {
        foreach ($row as $value) {
            if ($value %2 != 0){
                $value = $maxValue;
            }
        }
    }
    print_r(showMatrix($a));
    return $a;
}

$array = genMatrix();
showMatrix($array);
$a = findMaxMatrixValue($array);
changeOddMatrix($array, $m);