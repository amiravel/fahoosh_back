<?php

namespace App\Business\Contracts;

use Illuminate\Database\Eloquent\Model;

interface BaseServiceInterface
{

    public function paginate(int $page = 1, int $perPage = 15): \Illuminate\Contracts\Pagination\LengthAwarePaginator;

    public function create(array $attributes): Model;

}
