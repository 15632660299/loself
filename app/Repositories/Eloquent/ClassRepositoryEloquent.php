<?php

namespace App\Repositories\Eloquent;

use App\Models\ClassModel;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Interfaces\ClassRepository;
use App\Validators\ClassValidator;
use App\Presenters\ClassPresenter;

/**
 * Class ClassRepositoryEloquent
 * @package namespace App\Repositories\Eloquent;
 */
class ClassRepositoryEloquent extends BaseRepositoryEloquent implements ClassRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ClassModel::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {
        return ClassValidator::class;
    }


    /**
    * Specify Presenter class name
    *
    * @return mixed
    */
    public function presenter()
    {
        return ClassPresenter::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    /**
     * Must activated
     *
     * @return $this
     */
    public function activated()
    {
        $this->model = $this->model->activated();
        return $this;
    }

    /**
     * Add student id restriction
     *
     * @param $student_id
     * @return $this
     */
    public function byStudentId($student_id)
    {
        $this->model = $this->model->byStudentId($student_id);
        return $this;
    }

    /**
     * Get all class by student id
     *
     * @param $student_id
     * @return array
     */
    public function getByStudentId($student_id)
    {
        return $this->byStudentId($student_id)->all();
    }

    /**
     * Find activated class by student id
     *
     * @param $student_id
     * @return mixed
     */
    public function findActivatedByStudentId($student_id)
    {
        return $this->activated()->byStudentId($student_id)->first();
    }
}
