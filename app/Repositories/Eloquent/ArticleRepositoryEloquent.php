<?php

namespace App\Repositories\Eloquent;

use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Interfaces\ArticleRepository;
use App\Models\Article;
use App\Validators\ArticleValidator;
use App\Presenters\ArticlePresenter;

/**
 * Class ArticleRepositoryEloquent
 * @package namespace App\Repositories\Eloquent;
 */
class ArticleRepositoryEloquent extends BaseRepositoryEloquent implements ArticleRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Article::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {
        return ArticleValidator::class;
    }


    /**
    * Specify Presenter class name
    *
    * @return mixed
    */
    public function presenter()
    {
        return ArticlePresenter::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    /**
     * Add category id restriction
     * @param $category_id
     * @return $this
     */
    public function byCategoryId($category_id)
    {
        $this->model = $this->model->byCategoryId($category_id);
        return $this;
    }

    /**
     * Get all article by category id
     * @param $category_id
     * @return array
     */
    public function getByCategoryId($category_id)
    {
        return $this->byCategoryId($category_id)->all();
    }
}
