<?php

namespace App\Presenters;

use App\Transformers\ClassTransformer;

/**
 * Class ClassPresenter
 *
 * @package namespace App\Presenters;
 */
class ClassPresenter extends BasePresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new ClassTransformer();
    }
}
