<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;
use App\Models\Standard;

class TaskController extends Controller
{
    public function update(Request $request)
    {
        $task = Task::find($request->id);
        $task->percentage = $request->percentage;
        $task->save();
        $standard = Standard::where('name', $task->standard)->first();
        $ts = Task::where('standard', $standard->name)->get('percentage');
        $array = [];
        foreach ($ts as $t) {
            $total[] = $t->percentage;
        }
        $standard->percentage = array_sum($total) / count($total);
        $standard->save();
    }
}
