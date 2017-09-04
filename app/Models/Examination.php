<?php

namespace App\Models;

use App\Models\Base\BaseUserModel as Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Examination extends Model implements Transformable
{
    use TransformableTrait, SoftDeletes;

    protected $primaryKey = 'examination_id';

    protected $fillable = [
        'course_id', 'student_id', 'examination_type_id', 'result',
    ];

}
