<?php

namespace App\Writer;

class BranchWriter implements Writer
{
    /**
     * Writes detailed information about the branch.
     *
     * @param array $data
     */
    public function write(array $data) : void
    {
        echo $this->padRight("Филиал", 40)
            .$this->padRight("Имя", 40)
            .$this->padRight("Фамилия", 40)
            .$this->padRight("Должность", 40) . "<br>";

        foreach($data as $value) {
            echo $this->padRight($value->branch, 40)
                .$this->padRight($value->name, 40)
                .$this->padRight($value->surname, 40)
                .$this->padRight($value->work, 40) . "<br>";
        }
    }

    /**
     * Creates indents to the right.
     *
     * @param string $string
     * @param int $length
     * @return string
     */
    private function padRight(string $string, int $length) : string
    {
        return $string . str_repeat(' ', $length - mb_strlen($string));
    }

    /**
     * Creates indents to the left.
     *
     * @param string $string
     * @param int $length
     * @return string
     */
    private function padLeft(string $string, int $length) : string
    {
        return str_repeat(' ', $length - mb_strlen($string)) . $string;
    }
}