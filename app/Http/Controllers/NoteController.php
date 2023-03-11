<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Note;
use App\Models\Task;

class NoteController extends Controller
{
    public function index(Task $task)
    {
        if (auth()->user()->standard != $task->standard && auth()->user()->standard != 0) {
            abort(403);
        }
        $notes = $task->notes;
        return view('notes', compact(['notes', 'task']));
    }

    public function store(Request $request)
    {
        $request->validate([
            'task_id' => 'required|integer',
            'message' => 'required|string',
        ]);
        $note = new Note;
        $note->task_id = $request->task_id;
        $note->message = $request->message;
        $note->save();
        return redirect()->back();
    }

    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required|integer',
            'message' => 'required|string'
        ]);
        $note = Note::find($request->id);
        $note->message = $request->message;
        $note->save();
        return redirect()->back();
    }

    public function destroy(Note $note)
    {
        $note->delete();
        return redirect()->back();
    }
}
