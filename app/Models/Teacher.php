<?php

namespace App\Models;

use App\Models\Base\BaseUserModel as Model;
use App\Models\Traits\BelongsToUser;
use Illuminate\Database\Eloquent\SoftDeletes;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Teacher extends Model implements Transformable
{
    use TransformableTrait, SoftDeletes;
    use BelongsToUser;

    protected $primaryKey = 'teacher_id';

    protected $fillable = [];

}
