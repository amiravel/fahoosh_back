<?php

namespace App\Repositories\Concrete;

use App\Models\Room;
use App\Repositories\Contracts\RoomRepositoryInterface;

class RoomRepository extends BaseRepository implements RoomRepositoryInterface
{

    protected string $model = Room::class;

}
