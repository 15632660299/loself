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
     * @return $this
     */
    public function activated();
}
