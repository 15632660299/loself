<?php

namespace App\Presenters;

use App\Transformers\TeacherTransformer;

/**
 * Class TeacherPresenter
 *
 * @package namespace App\Presenters;
 */
class TeacherPresenter extends BasePresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new TeacherTransformer();
    }
}
