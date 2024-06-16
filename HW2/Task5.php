<?php
/*
 * Дана строка. Определите,
 *  какой символ в ней встречается раньше: 'x' или 'w'.
 * Если какого-то из символов нет, вывести сообщение об этом.
 */


class Task5
{
    private ?string $text = null;
    private ?string $letter1 = 'x';
    private ?string $letter2 = 'w';
    private ?string $result = null;

    public function __construct(?string $text)
    {
        $this->text = $text;
    }

    public function findLetterPos(): string
    {
        $letter1pos = strpos($this->text, $this->letter1);
        $letter2pos = strpos($this->text, $this->letter2);

        if ($letter1pos === false && $letter2pos === false) {
            $this->result = "Нет данных букв";
        } elseif ($letter1pos === false) {
            $this->result = $this->letter2;
        } elseif ($letter2pos === false) {
            $this->result = $this->letter1;
        } else {
            $this->result = ($letter1pos < $letter2pos) ? $this->letter1 : $this->letter2;
        }

        return $this->result;
    }

    public function getResult(): ?string
    {
        return $this->result;
    }
}

// Пример использования
$text = "example text with some x and w letters";
$task = new Task5($text);
echo "Текст: " . $text . "<br>";
echo "Результат: " . $task->findLetterPos() . "<br>";



