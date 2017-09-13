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

    public function students()
    {
        return $this->belongsToMany(
            Student::class,
            'classes_students',
            $this->getKeyName(),
            'student_id'
        );
    }

    public function scopeByStudentId(Builder $builder, $student_id)
    {
        return $builder->whereHas('students', function (Builder $builder) use ($student_id) {
            $builder->where('students.student_id', '=', $student_id);
        });
    }

    public function scopeActivated(Builder $builder)
    {
        return $builder->where('is_active', '=', true);
    }
}
