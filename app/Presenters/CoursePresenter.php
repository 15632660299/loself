<?php

namespace App\Presenters;

use App\Transformers\CourseTransformer;

/**
 * Class CoursePresenter
 *
 * @package namespace App\Presenters;
 */
class CoursePresenter extends BasePresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new CourseTransformer();
    }
}
