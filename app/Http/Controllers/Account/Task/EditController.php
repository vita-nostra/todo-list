<?php

namespace App\Http\Controllers\Account\Task;

use App\Http\Controllers\Controller;
use App\Models\Task;

class EditController extends Controller
{
    public function __invoke(Task $task)
    {
        $this->authorize('destroy', $task);
        return view('account.task.edit', compact('task'));
    }
}

