<?php

namespace HW2;

class Task1
{
    // Проверяет, содержит ли данный массив из n чисел, все числа от 1 до n.
    private ?int $arrayLength = null;
    private array $array = [];

    public function __construct(int $arrayLength)
    {
        $this->arrayLength = $arrayLength;
        $this->array = array_map(function() {
            return mt_rand(1, $this->arrayLength); // Генерируем числа от 1 до $arrayLength
        }, array_fill(0, $this->arrayLength, 0));
    }

    public function checkNumbers(): void
    {
        $checkArray = range(1, $this->arrayLength);
        $missingNumbers = [];

        foreach ($checkArray as $checkValue) {
            if (!in_array($checkValue, $this->array)) {
                $missingNumbers[] = $checkValue;
            }
        }

        if (empty($missingNumbers)) {
            echo "Массив содержит все числа от 1 до " . $this->arrayLength . ".<br>";
        } else {
            echo "Массив не содержит следующих чисел: " . implode(", ", $missingNumbers) . ".<br>";
        }
    }

    public function showArray(): void
    {
        echo "Сгенерированный массив: " . implode(", ", $this->array) . "<br>";
    }
}

// Пример использования
$checkArray1 = new Task1(10);
$checkArray1->showArray();
$checkArray1->checkNumbers();
