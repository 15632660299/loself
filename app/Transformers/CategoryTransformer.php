<?php

namespace App\Transformers;

use App\Models\Category;

/**
 * Class CategoryTransformer
 * @package namespace App\Transformers;
 */
class CategoryTransformer extends BaseTransformer
{
    protected $availableIncludes = [
        'articles'
    ];

    /**
     * Transform the Category entity
     * @param Category $model
     *
     * @return array
     */
    public function transform(Category $model)
    {
        return [
            'category_id' => (int)$model->getKey(),
            'name' => (string)$model->name,
            'type' => (string)$model->type,
            'created_at' => (string)$model->created_at,
            'updated_at' => (string)$model->updated_at
        ];
    }

    public function includeArticles(Category $model)
    {
        if ($model->isType('article')) {
            return null;
        }
        $articles = $model->getArticles();
        if ($articles->isNotEmpty()) {
            return $this->collection($articles, new ArticleTransformer());
        }
        return null;
    }
}
