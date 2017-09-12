<?php

namespace App\Transformers;

use App\Models\User;

/**
 * Class UserTransformer
 * @package namespace App\Transformers;
 */
class UserTransformer extends BaseTransformer
{
    protected $availableIncludes = [
        'classes'
    ];

    /**
     * Transform the User entity
     * @param User $model
     *
     * @return array
     */
    public function transform(User $model)
    {
        return [
            'user_id' => (int)$model->getKey(),
            'name' => (string)$model->name,
            'email' => (string)$model->email,
            'created_at' => (string)$model->created_at,
        ];
    }

    public function includeClasses(User $model)
    {
        $classes = $model->classes;
        if ($classes->isNotEmpty()) {
            return $this->collection($classes, new ClassTransformer());
        }
        return null;
    }
}
