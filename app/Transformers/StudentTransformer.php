<?php

namespace App\Transformers;

use App\Models\Student;

/**
 * Class StudentTransformer
 * @package namespace App\Transformers;
 */
class StudentTransformer extends BaseTransformer
{

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
}
