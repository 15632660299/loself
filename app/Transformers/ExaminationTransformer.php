<?php

namespace App\Transformers;

use App\Models\Examination;

/**
 * Class ExaminationTransformer
 * @package namespace App\Transformers;
 */
class ExaminationTransformer extends BaseTransformer
{

    /**
     * Transform the Examination entity
     * @param Examination $model
     *
     * @return array
     */
    public function transform(Examination $model)
    {
        return [
            'examination_id' => (int)$model->examination_id,
            'result' => (float)$model->result,
            'created_at' => (string)$model->created_at,
            'updated_at' => (string)$model->updated_at
        ];
    }
}
