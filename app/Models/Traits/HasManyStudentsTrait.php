<?php

namespace App\Models\Traits;

use App\Models\Student;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

trait HasManyStudentsTrait
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function students()
    {
        return $this->hasMany(Student::class, $this->getKeyName(), $this->getKeyName());
    }

    /**
     * @return Collection
     */
    public function getStudents()
    {
        return $this->students;
    }

    /**
     * @param $name
     * @return Student|null
     */
    public function findStudentByName($name)
    {
        return $this->findByName($name)->first();
    }

    /**
     * @param $name
     * @return Collection
     */
    public function findManyStudentsByName($name)
    {
        return $this->findByName($name)->get();
    }

    /**
     * @param $name
     * @return Builder
     */
    private function findByName($name) {
        return $this->students()->byUserName($name);
    }
}