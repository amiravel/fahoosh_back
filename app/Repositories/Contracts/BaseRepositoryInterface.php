<?php

namespace App\Repositories\Contracts;
use Illuminate\Database\Eloquent\Model;

interface BaseRepositoryInterface
{

    public function paginate(int $page = 1, int $perPage = 15): \Illuminate\Contracts\Pagination\LengthAwarePaginator;

    public function setQuery(): void;

    public function create(array $attributes): Model;

}
