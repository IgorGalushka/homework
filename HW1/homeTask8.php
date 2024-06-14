<?php
/*
 * Определите, есть ли в массиве повторяющиеся элементы.
 */

function generateArray($n = 20)
    //Функция генерирует массив случайных чисел от 0 до 20
{
    $a = [];

    for ($i=0; $i<$n; $i++){
        $a[] = mt_rand(0, 20);
    }
    print_r($a);
    return $a;
}

function solveTask8()
{
    $array = generateArray();
    $repeateValuesArray = [];
    for($i = 0; $i < count($array); $i++)
    {foreach ($array as $value)
    {if ($array[$i] === $value){
        {$repeateValuesArray = []

        }
    }

       }
    }

}