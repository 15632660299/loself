<?php

namespace App\Models\Traits;

use App\Models\Student;

trait HasStudentTrait
{
    public function student()
    {
        return $this->hasOne(Student::class, $this->getKeyName(), $this->getKeyName());
    }

    public function getStudents()
    {
        return $this->student;
    }
}