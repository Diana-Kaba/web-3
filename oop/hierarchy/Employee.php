<?php


class Employee extends Citizen
{
    public $company, $salary;

    public function __construct($fullName, $yearOfBirth, $age = 1, $city = "", $id, $company, $salary)
    {
        parent::__construct($fullName, $yearOfBirth, $age, $city, $id);
        $this->company = $company;
        $this->salary = $salary;
    }

    public function __toString() {
        $str = "{$this->fullName} працює в {$this->company}. Отримає зарплатню розміром: {$this->salary}$.\n";
        return $str;
    }
}
