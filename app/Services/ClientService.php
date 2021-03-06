<?php

namespace CodeProject\Services;

use CodeProject\Repositories\ClientRepository;
use CodeProject\Validators\ClientValidator;

class ClientService
{
	protected $repository;
	protected $validator;

	public function __construct(ClientRepository $repository, ClientValidator $validator)
	{
		$this->repository = $repository;
		$this->validator = $validator;
	}	

	public function create(array $data)
	{
		$this->validator->with($data)->passesOrFail();
		return $this->repository->create($data);
	}

	public function update($id, array $data)
	{
		$this->validator->with($data)->passesOrFail();
		return $this->repository->update($data, $id);
	}
}