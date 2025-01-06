<?php

namespace App\Business\Contracts;

interface BaseServiceInterface
{

    public function paginate(int $page = 1, int $perPage = 15): \Illuminate\Contracts\Pagination\LengthAwarePaginator;

}
