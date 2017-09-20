<?php

namespace App\Repositories\Interfaces;

/**
 * Interface StudentRepository
 * @package namespace App\Repositories\Interfaces;
 */
interface StudentRepository extends BaseRepositoryInterface
{
    /**
     * Add class id restriction
     * @param $class_id
     * @return $this
     */
    public function byClassId($class_id);

    /**
     * Get all user by class id
     * @param $class_id
     * @return array
     */
    public function getByClassId($class_id);
}
