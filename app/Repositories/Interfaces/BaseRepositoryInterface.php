<?php

namespace App\Repositories\Interfaces;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface BaseRepositoryInterface
 * @package namespace App\Repositories\Interfaces;
 */
interface BaseRepositoryInterface extends RepositoryInterface
{

    /**
     * Wrapper result data
     *
     * @param $data
     * @return mixed
     */
    public function present($data);

}
