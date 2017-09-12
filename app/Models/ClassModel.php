<?php

namespace App\Models;

use App\Models\Base\BaseUserModel as Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class ClassModel extends Model implements Transformable
{
    use TransformableTrait, SoftDeletes;

    protected $table = 'classes';

    protected $primaryKey = 'class_id';

    protected $fillable = [
        'year', 'code', 'teacher_id', 'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];

    public function users()
    {
        return $this->belongsToMany(
            User::class,
            'classes_users',
            $this->getKeyName(),
            'user_id'
        );
    }

    public function scopeByUserId(Builder $builder, $user_id)
    {
        return $builder->whereHas('users', function (Builder $builder) use ($user_id) {
            $builder->where('users.user_id', '=', $user_id);
        });
    }

    public function scopeActivated(Builder $builder)
    {
        return $builder->where('is_active', '=', true);
    }
}
