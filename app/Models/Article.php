<?php

namespace App\Models;

use App\Models\Base\BaseUserModel as Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Article extends Model implements Transformable
{
    use TransformableTrait;

    protected $primaryKey = 'article_id';

    protected $fillable = [
        'title', 'summary', 'content', 'published_at'
    ];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('published', function (Builder $builder) {
            $builder->where('published_at', '>=', Carbon::now());
        });
    }

}
