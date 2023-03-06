<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Attachment;
use App\Models\Task;

class AttachmentController extends Controller
{
    public function index(Task $task)
    {
        if (auth()->user()->standard != $task->standard && auth()->user()->standard != 0) {
            abort(403);
        }
        $attachments = $task->attachments()->paginate(15);
        return view('attachments', compact(['attachments', 'task']));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'file' => 'required|file',
        ]);

        $path = 'uploads/' . $request->standard . '/' . $request->task_id . '/' . 'attachments/';
        $filename = time() . '.' . $request->file('file')->getClientOriginalExtension();

        $request->file('file')->move($path, $filename);

        $path = $path . $filename;

        $attachment = new Attachment;
        $attachment->name = $request->name;
        $attachment->path = $path;
        $attachment->task_id = $request->task_id;
        $attachment->save();

        return redirect()->back();
    }
}
