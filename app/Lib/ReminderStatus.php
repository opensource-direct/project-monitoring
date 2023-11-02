<?php

namespace App\Lib;

enum ReminderStatus: string {
    case PENDING = "pending";
    case INPROGRESS = "inprogress";
    case COMPLETE = "complete";
}
