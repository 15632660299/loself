<?php

namespace App\Repositories\Eloquent;

use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Interfaces\TeacherRepository;
use App\Models\Teacher;
use App\Validators\TeacherValidator;
use App\Presenters\TeacherPresenter;

/**
 * Class TeacherRepositoryEloquent
 * @package namespace App\Repositories\Eloquent;
 */
class TeacherRepositoryEloquent extends BaseRepositoryEloquent implements TeacherRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Teacher::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {
        return TeacherValidator::class;
    }


    /**
    * Specify Presenter class name
    *
    * @return mixed
    */
    public function presenter()
    {
        return TeacherPresenter::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
