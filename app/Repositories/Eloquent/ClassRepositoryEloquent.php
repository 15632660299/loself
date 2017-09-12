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
     * Add user id restriction
     * @param $user_id
     * @return $this
     */
    public function byUserId($user_id)
    {
        $this->model = $this->model->byUserId($user_id);
        return $this;
    }

    /**
     * Must activated
     * @return $this
     */
    public function activated()
    {
        $this->model = $this->model->activated();
        return $this;
    }

    /**
     * Get all class by user id
     * @param $user_id
     * @return array
     */
    public function getByUserId($user_id)
    {
        return $this->byUserId($user_id)->all();
    }

    /**
     * Find activated class by user id
     * @param $user_id
     * @return mixed
     */
    public function findActivatedByUserId($user_id)
    {
        return $this->activated()->byUserId($user_id)->first();
    }
}
