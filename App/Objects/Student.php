<?php

namespace App\Objects;

use DateTime;

class Student extends Person
{
    private int $schoolYear;
    private DateTime $birthdate;

    public function __construct(string $surname, string $firstname, int $schoolYear, DateTime $birthdate, string $school = null)
    {
        parent::__construct($surname, $firstname, $school);
        $this->schoolYear = $schoolYear;
        $this->birthdate = $birthdate;
    }

    public function setSchoolYear(string $schoolYear)
    {
        return $this->schoolYear = $schoolYear;
    }
    public function getSchoolYear()
    {
        return $this->schoolYear;
    }

    public function setBirthdate(DateTime $birthdate)
    {
        return $this->birthdate = $birthdate;
    }
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    public function getAge()
    {
        $today = new DateTime;
        $diff = $this->birthdate->diff($today);
        return $diff->y;
    }

    public function __toString(): string
    {
        return  'Bonjour, je m\'appelle ' . $this->getName() . ', j\'ai ' . $this->getAge() . ' ans et je vais à l\'' . $this->getSchool() . ' en ' . $this->getSchoolYear() . 'ème année. ';
    }
}
