<?php

namespace App\Repositories\Eloquent;

use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Interfaces\UserRepository;
use App\Models\User;
use App\Validators\UserValidator;
use App\Presenters\UserPresenter;

/**
 * Class UserRepositoryEloquent
 * @package namespace App\Repositories\Eloquent;
 */
class UserRepositoryEloquent extends BaseRepositoryEloquent implements UserRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return User::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {
        return UserValidator::class;
    }


    /**
    * Specify Presenter class name
    *
    * @return mixed
    */
    public function presenter()
    {
        return UserPresenter::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    /**
     * Add class id restriction
     * @param $class_id
     * @return $this
     */
    public function byClassId($class_id)
    {
        $this->model = $this->model->byClassId($class_id);
        return $this;
    }

    /**
     * Get all user by class id
     * @param $class_id
     * @return array
     */
    public function getByClassId($class_id)
    {
        return $this->byClassId($class_id)->all();
    }
}
