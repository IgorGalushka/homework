<?php
/*Дан массив из n элементов.
 * Переставьте его элементы случайным образом.
 */
class Task5
{
    private array $array = [];
    public function __construct()
    {
        $this->array = array_map(function() {
            return mt_rand(1, 50); // Генерируем числа от 1 до $arrayLength
        }, array_fill(0, 20, 0));
    }
    public function reorderArray(): array
    {
        shuffle($this->array);
        return $this->array;
    }

    public function showArray(): void
    {
        echo "Массив: " . implode(", ", $this->array) . "<br>";
    }
}

// Пример использования
$checkArray1 = new Task5();
echo "Исходный массив:<br>";
$checkArray1->showArray();

$checkArray1->reorderArray();
echo "Переставленный массив:<br>";
$checkArray1->showArray();