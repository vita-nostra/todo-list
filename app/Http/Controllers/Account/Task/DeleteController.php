<?php

namespace App\Http\Controllers\Account\Task;

use App\Http\Controllers\Controller;
use App\Models\Task;

class DeleteController extends Controller
{
    public function __invoke(Task $task)
    {
        $task->delete();

        return redirect()->route('account.task.index');
    }
}
