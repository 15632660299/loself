<?php

namespace App\Repositories\Interfaces;

/**
 * Interface ClassRepository
 * @package namespace App\Repositories\Interfaces;
 */
interface ClassRepository extends BaseRepositoryInterface
{
    /**
     * Add user id restriction
     * @param $user_id
     * @return $this
     */
    public function byUserId($user_id);

    /**
     * Must activated
     * @return $this
     */
    public function activated();

    /**
     * Get all class by user id
     * @param $user_id
     * @return array
     */
    public function getByUserId($user_id);

    /**
     * Find activated class by user id
     * @param $user_id
     * @return mixed
     */
    public function findActivatedByUserId($user_id);
}
