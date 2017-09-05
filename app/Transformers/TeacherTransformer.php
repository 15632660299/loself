<?php

namespace App\Transformers;

use App\Models\Teacher;

/**
 * Class TeacherTransformer
 * @package namespace App\Transformers;
 */
class TeacherTransformer extends BaseTransformer
{

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
}
