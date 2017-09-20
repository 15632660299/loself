<?php

namespace App\Transformers;

use App\Models\ClassModel;
use App\Models\Teacher;
use App\Repositories\Interfaces\ClassRepository;

/**
 * Class ClassTransformer
 * @package namespace App\Transformers;
 */
class ClassTransformer extends BaseTransformer
{
    protected $availableIncludes = [
        'teacher'
    ];

    /**
     * Transform the Class entity
     * @param ClassModel $model
     *
     * @return array
     */
    public function transform(ClassModel $model)
    {
        return [
            'class_id' => (int)$model->getKey(),
            'year' => (string)$model->year,
            'code' => (string)$model->code,
            'created_at' => (string)$model->created_at,
            'updated_at' => (string)$model->updated_at
        ];
    }

    public function includeTeacher(ClassModel $model)
    {
        $teacher = $model->getTeacher();
        if ($teacher instanceof Teacher) {
            return $this->item($teacher, new TeacherTransformer());
        }
        return null;
    }
}
