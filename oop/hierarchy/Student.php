<?php


class Student extends Citizen
{
    public $university, $gpa;

    public function __construct($fullName, $yearOfBirth, $age = 1, $city = "", $id, $university, $gpa)
    {
        parent::__construct($fullName, $yearOfBirth, $age, $city, $id);
        $this->university = $university;
        $this->gpa = $gpa;
    }

    public function __toString() {
        $str = "Студент/ка {$this->fullName} навчається в {$this->university}. Має середній бал: {$this->gpa}.\n";
        return $str;
    }
}
