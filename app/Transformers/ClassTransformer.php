<?php

namespace App\Transformers;

use App\Models\ClassModel;

/**
 * Class ClassTransformer
 * @package namespace App\Transformers;
 */
class ClassTransformer extends BaseTransformer
{

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
}
