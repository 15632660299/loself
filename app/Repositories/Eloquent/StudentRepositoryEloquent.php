<?php

namespace App\Repositories\Eloquent;

use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Interfaces\StudentRepository;
use App\Models\Student;
use App\Validators\StudentValidator;
use App\Presenters\StudentPresenter;

/**
 * Class StudentRepositoryEloquent
 * @package namespace App\Repositories\Eloquent;
 */
class StudentRepositoryEloquent extends BaseRepositoryEloquent implements StudentRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Student::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {
        return StudentValidator::class;
    }


    /**
    * Specify Presenter class name
    *
    * @return mixed
    */
    public function presenter()
    {
        return StudentPresenter::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
