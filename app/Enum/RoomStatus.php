<?php

namespace App\Enum;

enum RoomStatus
{

    case ready;

    case pending_cleanup;

    case reserved;

}
