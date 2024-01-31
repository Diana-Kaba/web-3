<?php

abstract class Shape
{
    protected $x, $y, $color;

    public function __construct($x, $y, $color = "black")
    {
        $this->x = $x;
        $this->y = $y;
        $this->color = $color;
    }

    abstract public function draw();

    public function move($x = 0, $y = 0)
    {
        echo "<p style='text-align: right;'>Рухаємо фігуру. Старі координати - x: " . $this->x . ", y: " . $this->y . "; нові координати - x: " . $x . ", y: " . $y . "</p>";
        $this->x = $x;
        $this->y = $y;
    }
}
