<?php

namespace App\Business\Concrete;

use App\Business\Contracts\RoomServiceInterface;
use App\Repositories\Contracts\BaseRepositoryInterface;
use App\Repositories\Contracts\RoomRepositoryInterface;

class RoomService extends BaseService implements RoomServiceInterface
{

    public function __construct(RoomRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }

}
