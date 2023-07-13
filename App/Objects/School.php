<?php

namespace App\Objects;

abstract class School 
{   //*******************
    // Static
    //********************

    protected array $grades = [];

    
    //***************
    // Instances
    //**************
    protected string $schoolName;
    protected string $city; 
    protected array $schoolTypes;
   
    public function __construct(string $schoolName, string $city, array $schoolTypes = []){
        $this->schoolName = $schoolName;
        $this->city = $city;
        $this->schoolTypes = $schoolTypes;

    }

    // *************************
    // School name
    // *************************
    public function getSchoolName():string 
    {
        return $this->schoolName;
    }
    public function setSchoolName(string $schoolName)
    {
        return $this->schoolName = $schoolName;
    }

    // *************************
    // School city
    // *************************
    public function getCity()
    {
        return $this->city;
    }
    public function setCity(string $city)
    {
        return $this->city = $city;
    }

    // *************************
    // School types
    // *************************
    public function setSchoolTypes(array $schoolTypes)
    {
        return $this->schoolTypes = $schoolTypes;
    }
    public function addSchoolTypes(string $schoolType) :void
    {
        array_push($this->schoolTypes, $schoolType);
    }
    public function deleteSchoolType(string $schoolType): array
    {
        $index = array_search($schoolType, $this->schoolTypes);
        if ($index !== false) {
            unset($this->schoolTypes[$index]);
        }
        return $this->schoolTypes;
    }
    public function displaySchoolTypes(): string
    {
        return implode(' , ', $this->schoolTypes);
    }

    // *************************
    // School grades
    // *************************
    public function setGrade(array $grades)
    {
        return $this->grades = $grades;
    }
    public function addGrade(string $grade)
    {
        array_push($this->grades, $grade);
    }
    public function deleteGrade(string $grade): array
    {
        $index = array_search($grade, $this->grades);
        if ($index !== false) {
            unset($this->grades[$index]);
        }
        return $this->grades;
    }
    public function displayGrades(): string
    {
        return implode(' , ', $this->grades);
    }
    
}