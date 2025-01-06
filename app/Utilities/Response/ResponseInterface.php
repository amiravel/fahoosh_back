<?php

namespace App\Utilities\Response;

interface ResponseInterface
{

    public function paginate($data);

    public function item($data);

}
