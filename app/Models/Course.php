<?php

namespace App\Models;

use App\Models\Base\BaseUserModel as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Course extends Model implements Transformable
{
    use TransformableTrait, SoftDeletes;

    protected $primaryKey = 'course_id';

    protected $fillable = [
        'name'
    ];

}
