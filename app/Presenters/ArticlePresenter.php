<?php

namespace App\Presenters;

use App\Transformers\ArticleTransformer;

/**
 * Class ArticlePresenter
 *
 * @package namespace App\Presenters;
 */
class ArticlePresenter extends BasePresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new ArticleTransformer();
    }
}
