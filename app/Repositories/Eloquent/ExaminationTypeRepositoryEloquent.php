<?php

namespace App\Repositories\Eloquent;

use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Interfaces\ExaminationTypeRepository;
use App\Models\ExaminationType;
use App\Validators\ExaminationTypeValidator;
use App\Presenters\ExaminationTypePresenter;

/**
 * Class ExaminationTypeRepositoryEloquent
 * @package namespace App\Repositories\Eloquent;
 */
class ExaminationTypeRepositoryEloquent extends BaseRepositoryEloquent implements ExaminationTypeRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ExaminationType::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {
        return ExaminationTypeValidator::class;
    }


    /**
    * Specify Presenter class name
    *
    * @return mixed
    */
    public function presenter()
    {
        return ExaminationTypePresenter::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
