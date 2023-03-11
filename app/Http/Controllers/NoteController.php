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
        return view('attachments', compact(['attachments', 'task']));
    }

    public function store(Request $request)
    {
        Task::create($request->all());
        return redirect()->back();
    }
}
