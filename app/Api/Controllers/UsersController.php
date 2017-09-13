<?php

namespace App\Api\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Presenters\BasicPresenter;
use App\Repositories\Interfaces\ClassRepository;
use App\Repositories\Interfaces\UserRepository;
use App\Validators\UserValidator;
use Dingo\Api\Exception\DeleteResourceFailedException;
use Dingo\Api\Exception\StoreResourceFailedException;
use Dingo\Api\Exception\UpdateResourceFailedException;
use Illuminate\Http\Request;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;

class UsersController extends BaseController
{

    /**
     * @var UserRepository
     */
    protected $repository;

    /**
     * @var UserValidator
     */
    protected $validator;

    public function __construct(UserRepository $repository, UserValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    public function me()
    {
        $user = \Auth::user();
        return $this->repository->present($user);
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
     * @param  UserCreateRequest $request
     *
     * @return \Dingo\Api\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
        $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

        $user = $this->repository->create($request->all());

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
     * @param  UserUpdateRequest $request
     * @param  string            $id
     *
     * @return \Dingo\Api\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {

        $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

        $user = $this->repository->update($request->all(), $id);

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

    public function getClassesByUserId(ClassRepository $classRepository, $user_id)
    {
        return $classRepository->byUserId($user_id)->all();
    }

    public function getClassesByAuthUser(ClassRepository $classRepository)
    {
        return $this->getClassesByUserId($classRepository, \Auth::id());
    }

    public function getActivatedClassByUserId(ClassRepository $classRepository, $user_id)
    {
        return $classRepository->findActivatedByUserId($user_id);
    }

    public function getActivatedClassByAuthUser(ClassRepository $classRepository)
    {
        return $this->getActivatedClassByUserId($classRepository, \Auth::id());
    }
}
