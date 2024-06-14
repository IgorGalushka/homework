<?php
class Task10
{
    private ?int $row = null;
    private ?int $column = null;
    private int $maxvalue = 0;
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
        echo "Текущая матрица:<br>";
        foreach ($this->matrix as $row) {
            foreach ($row as $value) {
                echo $value . ' ';
            }
            echo '<br>';
        }
    }

    private function findMaxMatrixValue()
    {
        foreach ($this->matrix as $row) {
            foreach ($row as $value) {
                if ($this->maxvalue < $value) {
                    $this->maxvalue = $value;
                }
            }
        }
        $this->showMaxValue();
    }

    public function changeOddMatrix()
    {
        $this->findMaxMatrixValue();
        for ($i = 0; $i < $this->row; $i++) {
            for ($j = 0; $j < $this->column; $j++) {
                if ($this->matrix[$i][$j] % 2 != 0) {
                    $this->matrix[$i][$j] = $this->maxvalue;
                }
            }
        }
        $this->getmatrixInfo();
    }

    private function showMaxValue()
    {
        echo "Наибольшее число в матрице: " . $this->maxvalue . "<br>";
    }
}

// Пример использования
$matrix1 = new Task10(5, 5);
$matrix1->changeOddMatrix();
