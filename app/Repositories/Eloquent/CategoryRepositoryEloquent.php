<?php

namespace App\Repositories\Eloquent;

use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Interfaces\CategoryRepository;
use App\Models\Category;
use App\Validators\CategoryValidator;
use App\Presenters\CategoryPresenter;

/**
 * Class CategoryRepositoryEloquent
 * @package namespace App\Repositories\Eloquent;
 */
class CategoryRepositoryEloquent extends BaseRepositoryEloquent implements CategoryRepository
{
    protected $fieldSearchable = [
        'type' => '='
    ];
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Category::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {
        return CategoryValidator::class;
    }


    /**
    * Specify Presenter class name
    *
    * @return mixed
    */
    public function presenter()
    {
        return CategoryPresenter::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
