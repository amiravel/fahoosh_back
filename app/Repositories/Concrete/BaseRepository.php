<?php

namespace App\Repositories\Concrete;

use App\Repositories\Contracts\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

abstract class BaseRepository implements BaseRepositoryInterface
{

    protected string $model = Model::class;

    protected Builder $query;

    public function __construct()
    {
        $this->setQuery();
    }

    public function paginate(int $page = 1, int $perPage = 15): \Illuminate\Contracts\Pagination\LengthAwarePaginator
    {
        return $this->query->paginate(perPage: $perPage, page: $page);
    }

    public function setQuery(): void
    {
        $this->query = App::make($this->model)->newQuery();
    }
}
