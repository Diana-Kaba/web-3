<?php
class Point
{
    public $x, $y, $z;
    public function __construct($x = 0, $y = 0, $z = 0)
    {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }
    public function distance()
    {
        return sqrt(pow(($this->x), 2) + pow(($this->y), 2) + pow(($this->z), 2));
    }
    public static function distance1(Point $p1, Point $p2)
    {
        return sqrt(pow(($p1->x - $p2->x), 2) + pow(($p1->y - $p2->y), 2) + pow(($p1->z - $p2->z), 2));
    }
    public function distance2(Point $p)
    {
        return sqrt(pow(($p->x - $this->x), 2) + pow(($p->y - $this->y), 2) + pow(($p->z - $this->z), 2));
    }
}
