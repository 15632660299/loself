<?php

namespace App\Transformers;

use App\Models\Teacher;
use App\Models\User;

/**
 * Class TeacherTransformer
 * @package namespace App\Transformers;
 */
class TeacherTransformer extends BaseTransformer
{
    protected $availableIncludes = [
        'user'
    ];

    protected $defaultIncludes = [
        'user'
    ];

    /**
     * Transform the Teacher entity
     * @param Teacher $model
     *
     * @return array
     */
    public function transform(Teacher $model)
    {
        return [
            'teacher_id'         => (int)$model->getKey(),
            'created_at' => (string)$model->created_at,
            'updated_at' => (string)$model->updated_at
        ];
    }

    public function includeUser(Teacher $model)
    {
        $user = $model->getUser();
        if ($user instanceof User) {
            return $this->item($user, new UserTransformer());
        }
        return null;
    }
}
