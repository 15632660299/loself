<?php

namespace App\Models;

use App\Models\Base\BaseUserModel as Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class ClassModel extends Model implements Transformable
{
    use TransformableTrait;

    protected $primaryKey = 'id';

    protected $fillable = [
        'year', 'code', 'teacher_id',
    ];
}
