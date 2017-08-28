<?php

namespace App\Presenters;

use App\Transformers\CategoryTransformer;

/**
 * Class CategoryPresenter
 *
 * @package namespace App\Presenters;
 */
class CategoryPresenter extends BasePresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new CategoryTransformer();
    }
}
