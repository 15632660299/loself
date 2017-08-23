<?php

namespace App\Transformers;

use App\Models\User;

/**
 * Class UserTransformer
 * @package namespace App\Transformers;
 */
class UserTransformer extends BaseTransformer
{

    /**
     * Transform the User entity
     * @param User $model
     *
     * @return array
     */
    public function transform(User $model)
    {
        return [
            'id' => (int)$model->getKey(),
            'name' => (string)$model->name,
            'email' => (string)$model->email,
            'created_at' => (string)$model->created_at,
        ];
    }
}
