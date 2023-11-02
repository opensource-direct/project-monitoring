<?php

namespace App\Http\Controllers;

use App\Models\Reminder as ModelReminder;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $countReminder = ModelReminder::where('status_notes', 1)->count();

        $data = [
            'reminderCount' => $countReminder,
        ];

        return view('dashboard.index', ['data' => $data]);
    }
}
