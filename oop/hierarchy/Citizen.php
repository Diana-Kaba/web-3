<?php


class Citizen extends Human
{
    protected $id;

    public function __construct($fullName, $yearOfBirth, $age = 1, $city = "", $id)
    {
        parent::__construct($fullName, $yearOfBirth, $age, $city);
        $this->id = $id;
    }

    public function __toString() {
        $str = "Ідентифікаційний номер громадянина {$this->fullName}: {$this->id}.\n";
        return $str;
    }
}
