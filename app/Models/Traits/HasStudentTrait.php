<?php

namespace App\Models\Traits;

use App\Models\Student;

trait HasStudentTrait
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function student()
    {
        return $this->hasOne(Student::class, $this->getKeyName(), $this->getKeyName());
    }

    /**
     * @return Student|null
     */
    public function getStudents()
    {
        return $this->student;
    }
}