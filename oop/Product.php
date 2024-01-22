<?php

class Product
{
    public $name;
    public $price;

    public function __construct($name = "", $price = 1)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function __toString()
    {
        return "{$this->name}, вартість: {$this->price} грн";
    }
}
