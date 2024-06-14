<?php
/*Пользователь вводит два числа.
*Если они не равны 10 и первое число четное,
*то вывести их сумму, иначе вывести их произведение.
*/
function solveTask2($a, $b): int
    /*Пользователь вводит два числа.
    *Если они не равны 10 и первое число четное,
    *то вывести их сумму, иначе вывести их произведение.
    */
{if (($a !== 10) && ($b !== 10) && ($a % 2 == 0)) {
    return $a + $b;
} else {
    return $a * $b;
}
}

$result = solveTask2(3, 3);
echo $result;

class Task2
{
    private ?int $value1 = null;
    private ?int $value2 = null;

    public function __construct($value1 = 5, $value2 = 3)
    {
        $this->value1 = $value1;
        $this->value2 = $value2;
    }

    public function changeValue1(int $value)
    {
        $this->value1 = $value;

    }

    public function changeValue2(int $value)
    {
        $this->value2 = $value;

    }

    public function info()
    {
        echo 'Value1: ' . $this->value1 . '<br>';
        echo 'Value2: ' . $this->value2 . '<br>';
    }

    public function solveTask2(): int
        /*Пользователь вводит два числа.
        *Если они не равны 10 и первое число четное,
        *то вывести их сумму, иначе вывести их произведение.
        */
    {
        if (($this->value1 !== 10) && ($this->value2 !== 10) && ($this->value1 % 2 == 0)) {
            return $this->value1 + $this->value2;
        } else {
            return $this->value1 * $this->value2;
        }
    }
}

