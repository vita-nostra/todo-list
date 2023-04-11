<?php

namespace App\Http\Controllers\Account\Task;

use App\Http\Controllers\Controller;
use App\Models\Task;

class ShowController extends Controller
{
    public function __invoke(Task $task)
    {
        return view('account.task.show', compact('task'));
    }
}

