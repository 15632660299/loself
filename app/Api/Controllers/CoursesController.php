<?php

namespace App\Api\Controllers;

use App\Http\Requests\CourseCreateRequest;
use App\Http\Requests\CourseUpdateRequest;
use App\Repositories\Interfaces\CourseRepository;
use App\Validators\CourseValidator;
use Dingo\Api\Exception\DeleteResourceFailedException;
use Dingo\Api\Exception\StoreResourceFailedException;
use Dingo\Api\Exception\UpdateResourceFailedException;
use Illuminate\Http\Request;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;

class CoursesController extends BaseController
{

    /**
     * @var CourseRepository
     */
    protected $repository;

    /**
     * @var CourseValidator
     */
    protected $validator;

    public function __construct(CourseRepository $repository, CourseValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }


    /**
     * Display a listing of the resource.
     *
     * @return array
     */
    public function index()
    {
        return $this->repository->all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CourseCreateRequest $request
     *
     * @return \Dingo\Api\Http\Response
     */
    public function store(CourseCreateRequest $request)
    {
        $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

        $course = $this->repository->create($request->all());

        // throw exception if create failed
//        throw new StoreResourceFailedException('Failed to Create.');

        // Updated, return 201 created
        return $this->response->created();

    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return mixed
     */
    public function show($id)
    {
        return $this->repository->find($id);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  CourseUpdateRequest $request
     * @param  string            $id
     *
     * @return \Dingo\Api\Http\Response
     */
    public function update(CourseUpdateRequest $request, $id)
    {

        $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

        $course = $this->repository->update($request->all(), $id);

        // throw exception if update failed
//        throw new UpdateResourceFailedException('Failed to update.');

        // Updated, return 204 No Content
        return $this->response->noContent();

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Dingo\Api\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if ($deleted) {
            // Deleted, return 204 No Content
            return $this->response->noContent();
        } else {
            // Failed, throw exception
            throw new DeleteResourceFailedException();
        }
    }
}
