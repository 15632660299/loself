<?php

namespace App\Repositories\Eloquent;

use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Interfaces\ExaminationRepository;
use App\Models\Examination;
use App\Validators\ExaminationValidator;
use App\Presenters\ExaminationPresenter;

/**
 * Class ExaminationRepositoryEloquent
 * @package namespace App\Repositories\Eloquent;
 */
class ExaminationRepositoryEloquent extends BaseRepositoryEloquent implements ExaminationRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Examination::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {
        return ExaminationValidator::class;
    }


    /**
    * Specify Presenter class name
    *
    * @return mixed
    */
    public function presenter()
    {
        return ExaminationPresenter::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
