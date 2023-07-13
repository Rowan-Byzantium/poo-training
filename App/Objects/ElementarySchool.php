<?php

namespace App\Objects;

class ElementarySchool extends School
{
    protected static $grades = ['CP', 'CE1', 'CE2', 'CM1', 'CM2'];
   
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