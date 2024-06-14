<?php
// Генерирует двухмерный массив n×m элементов
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

// Считает количество вхождений числа 7 в матрице
function countSevens(array $a): int {
    $count = 0;
    foreach ($a as $row) {
        foreach ($row as $value) {
            if ($value == 7) {
                $count++;
            }
        }
    }
    return $count;
}

// Пример использования
$a = genMatrix();
showMatrix($a);

echo '<br>Количество вхождений числа 7: ' . countSevens($a);
?>
