<?php

namespace App\Models;

use App\Models\Base\BaseUserModel as Model;
use App\Models\Traits\CategoryMorphToByManyTrait;
use Illuminate\Database\Eloquent\SoftDeletes;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Category extends Model implements Transformable
{
    use TransformableTrait, SoftDeletes;
    use CategoryMorphToByManyTrait;

    protected $primaryKey = 'category_id';

    protected $fillable = [
        'name', 'type'
    ];

}
