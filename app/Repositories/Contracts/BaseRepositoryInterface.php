<?php

namespace App\Repositories\Contracts;
interface BaseRepositoryInterface
{

    public function paginate(int $page = 1, int $perPage = 15): \Illuminate\Contracts\Pagination\LengthAwarePaginator;

    public function setQuery(): void;

}
