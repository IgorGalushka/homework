<?php

/*
 * Найдите количество различных
 * элементов данного массива.
 *
 */

class Task3
{
    private ?int $arraylength = 10;
    private array $array = [];
    private ?int $uniqueValues = 0;

    public function __construct(int $arraylength)
    {
        $this->arraylength = $arraylength;
        $this->array = array_map(function() {
            return mt_rand(1, $this->arraylength); // Генерируем числа от 1 до $arraylength
        }, array_fill(0, $this->arraylength, 0));
    }

    public function findUniqueValues(): void
    {
        $uniqueArray = array_unique($this->array);
        $this->uniqueValues = count($uniqueArray);
    }

    public function showArray(): void
    {
        echo "Сгенерированный массив: " . implode(", ", $this->array) . "<br>";
    }

    public function showUniqueValues(): void
    {
        echo "Количество уникальных значений: " . $this->uniqueValues . "<br>";
    }
}

$checkTask3 = new Task3(10);
$checkTask3->showArray();
$checkTask3->findUniqueValues();
$checkTask3->showUniqueValues();
?>
