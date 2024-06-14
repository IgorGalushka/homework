<?php
// Генерирует двухмерный массив n×m элементов
//function genMatrix(int $n = 5, int $m = 5): array {
//    $a = [];
//    for ($i = 0; $i < $n; $i++) {
//        $row = [];
//        for ($j = 0; $j < $m; $j++) {
//            $row[] = mt_rand(0, 9);
//        }
//        $a[] = $row;
//    }
//    return $a;
//}
//
//// Выводит матрицу в виде таблицы
//function showMatrix(array $a): void {
//    foreach ($a as $row) {
//        foreach ($row as $value) {
//            echo $value . ' ';
//        }
//        echo '<br>';
//    }
//}
//
//// Считает количество вхождений числа 7 в матрице
//function countSevens(array $a): int {
//    $count = 0;
//    foreach ($a as $row) {
//        foreach ($row as $value) {
//            if ($value == 7) {
//                $count++;
//            }
//        }
//    }
//    return $count;
//}
//
//// Пример использования
//$a = genMatrix();
//showMatrix($a);
//
//echo '<br>Количество вхождений числа 7: ' . countSevens($a);
//


class Task9
{
    private ?int $row = null;
    private ?int $column = null;
    private int $counter = 0;
    private array $matrix = [];

    public function __construct(int $row, int $column)
    {
        $this->row = $row;
        $this->column = $column;
        $this->matrix = $this->genMatrix();
        $this->getmatrixInfo();
    }

    public function changeRows(int $row)
    {
        $this->row = $row;
    }

    public function changeColumns(int $column)
    {
        $this->column = $column;
    }

    private function genMatrix(): array
    {
        $array = [];
        for ($i = 0; $i < $this->row; $i++) {
            $row = [];
            for ($j = 0; $j < $this->column; $j++) {
                $row[] = mt_rand(0, 9);
            }
            $array[] = $row;
        }
        return $array;
    }

    private function getmatrixInfo()
    {
        foreach ($this->matrix as $row) {
            foreach ($row as $value) {
                echo $value . ' ';
            }
            echo '<br>';
        }
    }

    public function countSevens()
    {
        foreach ($this->matrix as $row) {
            foreach ($row as $value) {
                if ($value === 7) {
                    $this->counter++;
                }
            }
        }
        $this->showCounter();
    }

    private function showCounter()
    {
        echo "Количество цифр 7 в матрице: " . $this->counter;
    }
}

// Пример использования
$matrix1 = new Task9(5, 5);
$matrix1->countSevens();



