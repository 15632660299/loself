<?php

namespace App\Transformers;

use App\Models\Course;

/**
 * Class CourseTransformer
 * @package namespace App\Transformers;
 */
class CourseTransformer extends BaseTransformer
{

    /**
     * Transform the Course entity
     * @param Course $model
     *
     * @return array
     */
    public function transform(Course $model)
    {
        return [
            'course_id'         => (int)$model->getKey(),
            'name' => (string)$model->name,
            'created_at' => (string)$model->created_at,
            'updated_at' => (string)$model->updated_at
        ];
    }
}
