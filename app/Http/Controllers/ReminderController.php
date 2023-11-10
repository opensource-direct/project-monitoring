<?php

namespace App\Http\Controllers;

use App\Models\Reminder as ModelReminder;
use App\Lib\ReminderStatus;
use Illuminate\Http\Request;

class ReminderController extends Controller
{
    public function index()
    {
        $reminder = ModelReminder::get();

        // FORMULA 1: TO GET PERCENTAGE OF REMINDER IS CLOSED
        $totalDataReminder = ModelReminder::get()->count();
        $totalReminderIsClosed = ModelReminder::where('status_notes', 0)->count();
        $percentageReminderProgress = ($totalReminderIsClosed * 100 / $totalDataReminder);

        $data = [
            'reminder' => $reminder,
            'percentage' => round($percentageReminderProgress),
        ];

        return view('reminder.index', $data);
    }

    public function create()
    {
        return view('reminder.form', [
            'status_cases' => ReminderStatus::cases(),
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->only([
            'reminder_title',
            'reminder_detail',
            'created_by',
            'project_name',
            'status_notes',
        ]);

        ModelReminder::create($data);

        return redirect()->route('reminder.index');
    }

    public function show()
    {
        //
    }

    public function edit($id)
    {
        $reminder = ModelReminder::find($id);
        return view('reminder.form', ['reminder' => $reminder]);
    }

    public function update(Request $request, $id)
    {
        $data = [
            'reminder_title' =>$request->reminder_title,
            'reminder_detail' =>$request->reminder_detail,
            'created_by' =>$request->created_by,
            'project_name' =>$request->project_name,
            'status_notes' =>$request->status_notes,
        ];

        ModelReminder::find($id)->update($data);

        return redirect()->route('reminder.index');
    }

    public function destroy()
    {
        //
    }

    public function delete($id)
    {
        ModelReminder::find($id)->delete();

        return redirect()->route('reminder.index');
    }

    public function close($id)
    {
        $data = [
            'status_notes' => ReminderStatus::CLOSE,
        ];

        ModelReminder::find($id)->update($data);

        return redirect()->route('reminder.index');
    }

    public function open($id)
    {
        $data = [
            'status_notes' => ReminderStatus::OPEN,
        ];

        ModelReminder::find($id)->update($data);

        return redirect()->route('reminder.index');
    }
}
