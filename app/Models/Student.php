<?php

namespace App\Models;

use App\Models\Base\BaseUserModel as Model;
use App\Models\Traits\belongsToUser;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Student extends Model implements Transformable
{
    use TransformableTrait, SoftDeletes;

    protected $primaryKey = 'student_id';

    protected $fillable = [];

    public function scopeByUserName(Builder $query, $name)
    {
        return $query->whereHas('user', function (Builder $query) use ($name) {
            $query->where('name', $name);
        });
    }
}
