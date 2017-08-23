<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Interfaces\BaseRepositoryInterface;
use Prettus\Repository\Eloquent\BaseRepository as Repository;

/**
 * Class BaseRepositoryEloquent
 * @package namespace App\Repositories\Eloquent;
 */
abstract class BaseRepositoryEloquent extends Repository implements BaseRepositoryInterface
{

    /**
     * Wrapper result data
     *
     * @param $results
     * @return mixed
     */
    public function present($results)
    {
        return $this->parserResult($results);
    }

}
