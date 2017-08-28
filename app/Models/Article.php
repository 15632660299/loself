<?php

namespace App\Models;

use App\Models\Base\BaseUserModel as Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Article extends Model implements Transformable
{
    use TransformableTrait;

    protected $primaryKey = 'article_id';

    protected $fillable = [
        'title', 'summary', 'content',
    ];

}
