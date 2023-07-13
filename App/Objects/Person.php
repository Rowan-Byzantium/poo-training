<?php

namespace App\Objects;

class Person
{   
    protected string $surname = '';
    protected string $firstname = '';
    protected ?string $school;
    
    
    public function __construct(string $surname, string $firstname, string $school = null)
    {
        $this->surname = $surname;
        $this->firstname = $firstname;
        $this->school = $school;
    }

    public function getName(): string
    {
        $fullName = $this->firstname . ' ' . $this->surname;
        return $fullName;
    }

    public function setSchool(string $school)
    {
        return $this->school = $school;
    }
    public function getSchool()
    {
        return $this->school;
    }
    
}