<?php

namespace App\Models;

use App\Models\Base\BaseUserModel as Model;
use App\Models\Traits\MorphToManyCategoryTrait;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Article extends Model implements Transformable
{
    use TransformableTrait, SoftDeletes;
    use MorphToManyCategoryTrait;

    protected $primaryKey = 'article_id';

    protected $fillable = [
        'title', 'summary', 'content', 'published_at'
    ];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('published', function (Builder $builder) {
            $builder->where('published_at', '<=', Carbon::now());
        });
    }

    public function scopeByCategoryId(Builder $builder, $category_id)
    {
        return $builder->whereHas('categories',function (Builder $builder) use ($category_id) {
            return $builder->where('categoryables.category_id', '=', $category_id);
        });
    }
}
