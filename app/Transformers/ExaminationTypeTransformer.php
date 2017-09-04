<?php

namespace App\Transformers;

use App\Models\ExaminationType;

/**
 * Class ExaminationTypeTransformer
 * @package namespace App\Transformers;
 */
class ExaminationTypeTransformer extends BaseTransformer
{

    /**
     * Transform the ExaminationType entity
     * @param ExaminationType $model
     *
     * @return array
     */
    public function transform(ExaminationType $model)
    {
        return [
            'examination_type_id' => (int)$model->getKey(),
            'name' => (string)$model->name,
            'created_at' => (string)$model->created_at,
            'updated_at' => (string)$model->updated_at
        ];
    }
}
