<?php

namespace App\Models\Traits;

use App\Models\Student;

trait HasManyStudentsTrait
{
    public function students()
    {
        return $this->hasMany(Student::class, $this->getKeyName(), $this->getKeyName());
    }

    public function getStudents()
    {
        return $this->students;
    }

    public function findStudentByName($name)
    {
        return $this->findByName($name)->first();
    }

    public function findManyStudentsByName($name)
    {
        return $this->findByName($name)->get();
    }

    private function findByName($name) {
        return $this->students()->byUserName($name);
    }
}