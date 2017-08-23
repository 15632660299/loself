<?php

namespace App\Presenters;

use App\Transformers\BasicTransformer;

/**
 * Class UserPresenter
 *
 * @package namespace App\Presenters;
 */
class BasicPresenter extends BasePresenter
{
    protected $transformer;

    public function setTransformer($transformer)
    {
        $this->transformer = $transformer;
    }

    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        if (is_string($this->transformer) && class_exists($this->transformer)) {
            return new $this->transformer;
        } elseif (is_object($this->transformer)) {
            return $this->transformer;
        } else {
            return new BasicTransformer();
        }
    }
}
