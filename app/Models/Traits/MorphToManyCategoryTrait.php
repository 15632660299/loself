<?php

namespace App\Models\Traits;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;

trait MorphToManyCategoryTrait
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function categories()
    {
        static $category_primary_key;
        $category_primary_key = $category_primary_key ?? with(new Category())->getKeyName();
        return $this->morphToMany(Category::class, 'categoryable', 'categoryables', 'categoryable_id', $category_primary_key);
    }

    /**
     * @return Collection
     */
    public function getCategories()
    {
        return $this->categories;
    }
}