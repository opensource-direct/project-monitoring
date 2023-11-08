<?php

namespace App\Http\Controllers;

use App\Models\Reminder as ModelReminder;

class HomeAdministratorController extends Controller
{
    public function index()
    {
        $countReminder = ModelReminder::where('status_notes', 1)->count();

        $data = [
            'reminderCount' => $countReminder,
        ];

        return view('administrator.index', ['data' => $data]);
    }
}
