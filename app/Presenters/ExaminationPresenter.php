<?php

namespace App\Presenters;

use App\Transformers\ExaminationTransformer;

/**
 * Class ExaminationPresenter
 *
 * @package namespace App\Presenters;
 */
class ExaminationPresenter extends BasePresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new ExaminationTransformer();
    }
}
