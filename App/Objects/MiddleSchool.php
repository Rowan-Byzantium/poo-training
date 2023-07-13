<?php

namespace App\Objects;

class MiddleSchool extends School
{

    public function __construct(string $schoolName, string $city, array $grades = ['6ème', '5ème', '4ème', '3ème']){
       
        parent::__construct($schoolName, $city);
        $this->grades = $grades;
    }
   
    // *************************
    // School type
    // *************************
    // public function getSchoolType()
    // {
    //     return $this->schoolType;
    // }
    // public function setSchoolType(string $schoolType)
    // {
    //     return $this->schoolType = $schoolType;
    // }
}