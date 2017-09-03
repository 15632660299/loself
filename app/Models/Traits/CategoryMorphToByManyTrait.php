<?php

namespace App\Models\Traits;

use App\Models\Article;
use Illuminate\Database\Eloquent\Collection;

trait CategoryMorphToByManyTrait
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function articles()
    {
        return $this->morphedByMany(Article::class, 'categoryable', 'categoryables', $this->getKeyName(), 'categoryable_id');
    }

    /**
     * @return Collection
     */
    public function getArticles()
    {
        return $this->articles;
    }
}