<?php

namespace App\Lib;

enum ReminderStatus: string {
    case OPEN = "open";
    case CLOSE = "close";
}
