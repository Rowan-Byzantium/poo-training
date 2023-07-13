<?php

namespace App\Objects;

class HighSchool extends School
{

    public function __construct(string $schoolName, string $city, array $grades = ['2nde', '1ère', 'Terminale']){
       
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