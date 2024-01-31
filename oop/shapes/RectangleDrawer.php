<?php

class RectangleDrawer extends Shape
{
    protected $width, $height;

    public function __construct($x, $y, $width, $height, $color)
    {
        parent::__construct($x, $y, $color);
        $this->width = $width;
        $this->height = $height;

    }

    public function draw()
    {
        echo "<div style='position: absolute; top: {$this->y}px; left: {$this->x}px;width: {$this->width}px; height:{$this->height}px; background-color: {$this->color};'></div>";
    }
}
