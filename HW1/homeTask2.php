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