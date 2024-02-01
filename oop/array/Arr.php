<?php

class Arr
{
    public $arr;

    public function __construct($arr = [])
    {
        $this->arr = $arr;
    }

    public function __toString() {
        $str = "Масиви:\n";
        for ($i=0; $i < count($this->arr); $i++) {
            $str .= "№$i: ";
            for ($j=0; $j < count($this->arr[$i]); $j++) {
                $str .= "{$this->arr[$i][$j]} ";
            }
            $str .= "\n";
        }
        return $str;
    }
}
