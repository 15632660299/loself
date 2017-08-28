<?php

namespace App\Transformers;

use App\Models\Article;

/**
 * Class ArticleTransformer
 * @package namespace App\Transformers;
 */
class ArticleTransformer extends BaseTransformer
{

    /**
     * Transform the Article entity
     * @param Article $model
     *
     * @return array
     */
    public function transform(Article $model)
    {
        return [
            'article_id' => (int)$model->getKey(),
            'title' => (string)$model->title,
            'summary' => (string)$model->summary,
            'content' => (string)$model->content,
            'created_at' => (string)$model->created_at,
            'updated_at' => (string)$model->updated_at
        ];
    }
}
