<?php

class RoundRectangleDrawer extends Shape
{
    protected $width, $height, $rounding;

    public function __construct($x, $y, $width, $height, $color, $rounding)
    {
        parent::__construct($x, $y, $color);
        $this->width = $width;
        $this->height = $height;
        $this->rounding = $rounding;

    }

    public function draw()
    {
        echo "<div style='position: absolute; top: {$this->y}px; left: {$this->x}px;width: {$this->width}px; height:{$this->height}px; background-color: {$this->color}; border-radius: {$this->rounding}px;'></div>";
    }
}
