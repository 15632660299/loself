<?php

namespace App\Presenters;

use App\Transformers\StudentTransformer;

/**
 * Class StudentPresenter
 *
 * @package namespace App\Presenters;
 */
class StudentPresenter extends BasePresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new StudentTransformer();
    }
}
