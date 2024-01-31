<?php

class Human
{
    public $fullName, $yearOfBirth;
    private $age, $city;

    public function __construct($fullName, $yearOfBirth, $age = 1, $city = "")
    {
        $this->fullName = $fullName;
        $this->yearOfBirth = $yearOfBirth;
        $this->age = $age;
        $this->city = $city;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        if ($age > 0 && (date("Y") - $this->yearOfBirth) >= $age) {
            $this->age = $age;
            return true;
        }

        return false;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    public function __toString() {
        $str = "{$this->fullName} ({$this->age} років): {$this->yearOfBirth} року народження. Проживає в місті {$this->city}.\n";
        return $str;
    }
}
