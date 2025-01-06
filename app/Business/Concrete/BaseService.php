<?php

namespace App\Business\Concrete;

use App\Business\Contracts\BaseServiceInterface;
use App\Repositories\Contracts\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

abstract class BaseService implements BaseServiceInterface
{

    public function __construct(
        public BaseRepositoryInterface $repository
    )
    {
    }

    public function paginate(int $page = 1, int $perPage = 15): \Illuminate\Contracts\Pagination\LengthAwarePaginator
    {
        return $this->repository->paginate($page, $perPage);
    }

    public function create(array $attributes): Model
    {
        return $this->repository->create($attributes);
    }

}
