<?php

namespace App\Http\Controllers;

use App\Lib\ReminderStatus;
use App\Models\Reminder as ModelReminder;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $countReminder = ModelReminder::where('status_notes', ReminderStatus::OPEN)->count();

        $data = [
            'reminderCount' => $countReminder,
        ];

        return view('dashboard.index', ['data' => $data]);
    }
}
