<?php

namespace App\Objects;

class ElementarySchool extends School
{
    public function __construct(string $schoolName, string $city, array $grades = ['CP', 'CE1', 'CE2', 'CM1', 'CM2']){
       
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