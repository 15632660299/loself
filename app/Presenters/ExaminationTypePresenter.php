<?php

namespace App\Presenters;

use App\Transformers\ExaminationTypeTransformer;

/**
 * Class ExaminationTypePresenter
 *
 * @package namespace App\Presenters;
 */
class ExaminationTypePresenter extends BasePresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new ExaminationTypeTransformer();
    }
}
