<?php

namespace App\Repositories\Interfaces;

/**
 * Interface ArticleRepository
 * @package namespace App\Repositories\Interfaces;
 */
interface ArticleRepository extends BaseRepositoryInterface
{
    /**
     * Add category id restriction
     * @param $category_id
     * @return $this
     */
    public function byCategoryId($category_id);

    /**
     * Get all article by category id
     * @param $category_id
     * @return array
     */
    public function getByCategoryId($category_id);
}
