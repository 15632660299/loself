<?php

namespace App\Repositories\Interfaces;

/**
 * Interface ClassRepository
 * @package namespace App\Repositories\Interfaces;
 */
interface ClassRepository extends BaseRepositoryInterface
{
    /**
     * Must activated
     * 
     * @return $this
     */
    public function activated();

    /**
     * Add student id restriction
     * 
     * @param $student_id
     * @return $this
     */
    public function byStudentId($student_id);

    /**
     * Get all class by student id
     * 
     * @param $student_id
     * @return array
     */
    public function getByStudentId($student_id);

    /**
     * Find activated class by student id
     * 
     * @param $student_id
     * @return mixed
     */
    public function findActivatedByStudentId($student_id);
}
