<?php

class CircleDrawer extends Shape
{
    protected $radius, $color;

    public function __construct($x, $y, $radius, $color)
    {
        parent::__construct($x, $y, $color);
        $this->radius = $radius;
    }

    public function draw()
    {
        echo "<div style='position: absolute; top: {$this->y}px; left: {$this->x}px;width: {$this->radius}px; height: {$this->radius}px; background-color: {$this->color}; border-radius: 50%;'></div>";
    }
}