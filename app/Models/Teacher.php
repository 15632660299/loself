<?php

namespace App\Models;

use App\Models\Base\BaseUserModel as Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Teacher extends Model implements Transformable
{
    use TransformableTrait;

    protected $primaryKey = 'teacher_id';

    protected $fillable = [];

}
