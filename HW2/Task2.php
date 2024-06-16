<?php

namespace HW2;

class Task2
{
    /* Проверьте, является ли данный массив
    возрастающим или убывающим.
    */
    private ?int $arrayLength = null;
    private ?int $maxValue = null;
    private array $array = [];

    public function __construct(int $arrayLength, int $maxValue)
    {
        $this->arrayLength = $arrayLength;
        $this->maxValue = $maxValue;
        $this->array = array_map(function () {
            return mt_rand(1, $this->maxValue); // Генерируем числа от 1 до $maxValue
        }, array_fill(0, $this->arrayLength, 0));
    }

    public function checkArray(): void
    {
        $increase = true;
        $decrease = true;

        for ($i = 0; $i < $this->arrayLength - 1; ++$i)
        {
            if ($this->array[$i] > $this->array[$i + 1]) {
                $increase = false;
            } elseif ($this->array[$i] < $this->array[$i + 1]) {
                $decrease = false;
            }
        }

        if ($increase) {
            echo "Массив возрастающий<br>";
        } elseif ($decrease) {
            echo "Массив убывающий<br>";
        } else {
            echo "Массив не возрастающий, не убывающий<br>";
        }
    }

    public function showArray(): void
    {
        echo "Сгенерированный массив: " . implode(", ", $this->array) . "<br>";
    }
}

$checkArray1 = new Task2(4, 5);
$checkArray1->showArray();
$checkArray1->checkArray();
