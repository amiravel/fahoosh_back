<?php

namespace App\Http\Controllers;

use App\Business\Contracts\BaseServiceInterface;
use App\Utilities\Response\ResponseInterface;
use Illuminate\Support\Facades\App;

abstract class Controller
{

    protected ResponseInterface $response;

    public function __construct(
        public BaseServiceInterface $service,
    )
    {
        $this->response = App::make(ResponseInterface::class);
    }
}
