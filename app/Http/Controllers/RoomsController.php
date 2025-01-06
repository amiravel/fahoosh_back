<?php

namespace App\Http\Controllers;

use App\Business\Contracts\BaseServiceInterface;
use App\Business\Contracts\RoomServiceInterface;
use App\Http\Resources\RoomsResource;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomsController extends Controller
{

    public function __construct(RoomServiceInterface $service)
    {
        parent::__construct($service);
    }

    public function index()
    {
        return $this->response->paginate(
            RoomsResource::collection(
                $this->service->paginate(request('page', 1))
            )
        );
    }

}
