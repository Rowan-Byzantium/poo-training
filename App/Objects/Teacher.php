<?php

namespace App\Objects;

class Teacher extends Person
{
    private array $subjects;

    public function __construct(string $surname, string $firstname, string $school = null, array $subjects = [])
    {
       parent::__construct($surname, $firstname, $school);
        $this->subjects = $subjects;
    }

    public function setSubject(array $subjects)
    {
        return $this->subjects = $subjects;
    }
    public function addSubject(string $subject)
    {
        array_push($this->subjects, $subject);
    }
    public function displaySubjects(): string
    {
        return implode(' , ', $this->subjects);
    }

    public function __toString(): string
    {
        return  'Bonjour, je m\'appelle ' . $this->getName() . ' et j\'enseigne à l\'école ' . $this->getSchool() . ' les matières suivantes : ' . $this->displaySubjects() . '. ';
    }
}
