<?php

namespace App\Http\Controllers;

use App\Models\Reminder as ModelReminder;
use Illuminate\Http\Request;

class ReminderController extends Controller
{
    public function index()
    {
        $reminder = ModelReminder::get();
        return view('reminder.index', ['reminder' => $reminder]);
    }

    public function create()
    {
        return view('reminder.form'); 
    }

    public function store(Request $request)
    {
        $data = [
            'reminder_title' =>$request->reminder_title,
            'reminder_detail' =>$request->reminder_detail,
            'created_by' =>$request->created_by,
            'status_notes' =>$request->status_notes,
        ];

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
            'status_notes' => 0,
        ];

        ModelReminder::find($id)->update($data);

        return redirect()->route('reminder.index');
    }

    public function open($id) 
    {
        $data = [
            'status_notes' => 1,
        ];

        ModelReminder::find($id)->update($data);

        return redirect()->route('reminder.index');
    }
}
