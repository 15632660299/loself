<?php

namespace App\Transformers;

use App\Models\Student;

/**
 * Class StudentTransformer
 * @package namespace App\Transformers;
 */
class StudentTransformer extends BaseTransformer
{
    protected $defaultIncludes = [
        'user'
    ];
    protected $availableIncludes = [
        'user'
    ];

    /**
     * Transform the Student entity
     * @param Student $model
     *
     * @return array
     */
    public function transform(Student $model)
    {
        return [
            'student_id' => (int)$model->student_id,
            'user_id' => (int)$model->user_id,
            'created_at' => (string)$model->created_at,
        ];
    }

    public function includeUser(Student $model)
    {
        $user = $model->user;
        if ($user) {
            return $this->item($user, new UserTransformer());
        }
        return null;
    }
}
