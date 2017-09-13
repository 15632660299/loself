<?php

namespace App\Api\Controllers;

use App\Http\Requests\StudentCreateRequest;
use App\Http\Requests\StudentUpdateRequest;
use App\Repositories\Interfaces\ClassRepository;
use App\Repositories\Interfaces\StudentRepository;
use App\Validators\StudentValidator;
use Dingo\Api\Exception\DeleteResourceFailedException;
use Dingo\Api\Exception\StoreResourceFailedException;
use Dingo\Api\Exception\UpdateResourceFailedException;
use Illuminate\Http\Request;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;

class StudentsController extends BaseController
{

    /**
     * @var StudentRepository
     */
    protected $repository;

    /**
     * @var StudentValidator
     */
    protected $validator;

    public function __construct(StudentRepository $repository, StudentValidator $validator)
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
     * @param  StudentCreateRequest $request
     *
     * @return \Dingo\Api\Http\Response
     */
    public function store(StudentCreateRequest $request)
    {
        $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

        $student = $this->repository->create($request->all());

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
     * @param  StudentUpdateRequest $request
     * @param  string            $id
     *
     * @return \Dingo\Api\Http\Response
     */
    public function update(StudentUpdateRequest $request, $id)
    {

        $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

        $student = $this->repository->update($request->all(), $id);

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

    public function getClassesByStudentId(ClassRepository $classRepository, $user_id)
    {
        return $classRepository->byStudentId($user_id)->all();
    }

    public function getActivatedClassByStudentId(ClassRepository $classRepository, $user_id)
    {
        return $classRepository->findActivatedByStudentId($user_id);
    }
}
