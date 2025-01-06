<?php

namespace App\Enum;

use App\Enum\Traits\InteractsWithEnums;

enum RoomStatus
{

    use InteractsWithEnums;

    case ready;

    case pending_cleanup;

    case reserved;

}
