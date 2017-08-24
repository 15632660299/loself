<?php

namespace App\Transformers;

use Illuminate\Database\Eloquent\Model;
use League\Fractal\TransformerAbstract;
use App\Models\User;

/**
 * Class BasicTransformer
 * @package namespace App\Transformers;
 */
class BasicTransformer extends TransformerAbstract
{

    /**
     * Transform the Any entity
     * @param mixed $data
     *
     * @return mixed
     */
    public function transform($data)
    {
        return $data;
    }
}
